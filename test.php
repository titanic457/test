<?php
$config = array('api_key'=>'75eai91d9lbp4j','secret_key'=>'34VgOpoLVlbyfiNp');
// Change these
define('API_KEY',      $config['api_key']);
define('API_SECRET',   $config['secret_key']);
define('REDIRECT_URI', ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on")?'https':'http').'://' . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME']);
//define('SCOPE',        'r_fullprofile r_emailaddress rw_nus'                        );
define('SCOPE',        'r_basicprofile');
 
// You'll probably use a database
session_name('linkedin');
session_start();
 
// OAuth 2 Control Flow
if (isset($_GET['error'])) {
    // LinkedIn returned an error
    print $_GET['error'] . ': ' . $_GET['error_description'];
    exit;
} elseif (isset($_GET['code'])) {
    // User authorized your application
    if ($_SESSION['state'] == $_GET['state']) {
        // Get token so you can make API calls
        getAccessToken();
    } else {
        // CSRF attack? Or did you mix up your states?
        exit;
    }
} else { 
    if ((empty($_SESSION['expires_at'])) || (time() > $_SESSION['expires_at'])) {
        // Token has expired, clear the state
        $_SESSION = array();
    }
    if (empty($_SESSION['access_token'])) {
        // Start authorization process
        getAuthorizationCode();
    }
}
 
// Congratulations! You have a valid token. Now fetch your profile 
//$user = fetch('GET', '/v1/people/~:(id,first-name,last-name,headline,email-address,picture-url,industry,educations,publications,languages,site-standard-profile-request,interests,summary,main-address,phone-numbers,skills:(skill))');
$user = fetch('GET', '/v1/people/~:(id,num-connections,picture-url,certifications,skills)');
//https://api.linkedin.com/v1/people/~:%28id,num-connections,picture-url,certifications%29?oauth2_access_token=AQW-OvnBCJ9YlOG-VIV13re-2vf5qWjIwq23ez2XyGH-TaJ4hj-JxXlOi3-b_y7volX6TWKjXRX313Xi2fNaA1mloJhbgQIlDPkUFs0jQxoXJJFnOlcstGaTfwXm5hJt24O1IyOZYSDfVhRH2rVSCKeU2qeBi9CjYqui9RkqOZJr-d2HBFQ&format=json

/*
all field
https://api.linkedin.com/v1/people/~:(id,first-name,email-address,last-name,headline,picture-url,industry,summary,specialties,positions:(id,title,summary,start-date,end-date,is-current,company:(id,name,type,size,industry,ticker)),educations:(id,school-name,field-of-study,start-date,end-date,degree,activities,notes),associations,interests,num-recommenders,date-of-birth,publications:(id,title,publisher:(name),authors:(id,name),date,url,summary),patents:(id,title,summary,number,status:(id,name),office:(name),inventors:(id,name),date,url),languages:(id,language:(name),proficiency:(level,name)),skills:(id,skill:(name)),certifications:(id,name,authority:(name),number,start-date,end-date),courses:(id,name,number),recommendations-received:(id,recommendation-type,recommendation-text,recommender),honors-awards,three-current-positions,three-past-positions,volunteer)?format=json
*/


echo '<pre>'; print_r($user); echo '</pre>';
die;
 
function getAuthorizationCode() {
    $params = array('response_type' => 'code',
                    'client_id' => API_KEY,
                    'scope' => SCOPE,
                    'state' => uniqid('', true), // unique long string
                    'redirect_uri' => REDIRECT_URI,
              );
 
    // Authentication request
    $url = 'https://www.linkedin.com/uas/oauth2/authorization?' . http_build_query($params);
 
    // Needed to identify request when it returns to us
    $_SESSION['state'] = $params['state'];
 
    // Redirect user to authenticate
    header("Location: $url");
    exit;
}
 
function getAccessToken() {
    $params = array('grant_type' => 'authorization_code',
                    'client_id' => API_KEY,
                    'client_secret' => API_SECRET,
                    'code' => $_GET['code'],
                    'redirect_uri' => REDIRECT_URI,
              );
 
    // Access Token request
    $url = 'https://www.linkedin.com/uas/oauth2/accessToken?' . http_build_query($params);
 
    // Tell streams to make a POST request
    $context = stream_context_create(
                    array('http' => 
                        array('method' => 'POST',
                        )
                    )
                );
 
    // Retrieve access token information
    $response = file_get_contents($url, false, $context);
 
    // Native PHP object, please
    $token = json_decode($response);
 
    // Store access token and expiration time
    $_SESSION['access_token'] = $token->access_token; // guard this! 
    $_SESSION['expires_in']   = $token->expires_in; // relative time (in seconds)
    $_SESSION['expires_at']   = time() + $_SESSION['expires_in']; // absolute time
 
    return true;
}
 
function fetch($method, $resource, $body = '') {
    $params = array('oauth2_access_token' => $_SESSION['access_token'],
                    'format' => 'json',
              );
 
    // Need to use HTTPS
    $url = 'https://api.linkedin.com' . $resource . '?' . http_build_query($params);
    // Tell streams to make a (GET, POST, PUT, or DELETE) request
    $context = stream_context_create(
                    array('http' => 
                        array('method' => $method,
                        )
                    )
                );
 
    // Hocus Pocus
    $response = file_get_contents($url, false, $context);
    //$resource = getHtml($url);
   //echo $resource; die();
    // Native PHP object, please
    return json_decode($response);
}

function getHtml($url, $post = null) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    if(!empty($post)) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    } 
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}