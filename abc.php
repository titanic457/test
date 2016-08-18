<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" class="com_jobseekers view-search itemid-1157 bootstrap3 en-GB j35 responsive-enabled layout-mr rendered-m toggle-menu zen-grid" data-navcollapse="1050" data-gridcollapse="787">
<head><link rel="stylesheet" href="/media/com_jbolo/themes/facebook/style.css" type="text/css"/>
<link rel="stylesheet" href="/media/com_jbolo/vendors/emojione/assets/css/emojione.min.css" type="text/css"/>
<link rel="stylesheet" href="/media/com_jbolo/vendors/jquery-ui/themes/smoothness/jquery-ui-1.10.4.custom.min.css" type="text/css"/>
<link rel="stylesheet" href="/media/techjoomla_strapper/css/bootstrap.j3.min.css" type="text/css"/>
<link rel="stylesheet" href="/media/techjoomla_strapper/css/strapper.min.css" type="text/css"/><script src="/media/jui/js/jquery.min.js" type="text/javascript"></script>
<script src="/media/techjoomla_strapper/js/namespace.min.js" type="text/javascript"></script>
<script src="/media/com_jbolo/vendors/jquery.quicksearch.js" type="text/javascript"></script>
<script src="/media/com_jbolo/vendors/jquery.tmpl.min.js" type="text/javascript"></script>
<script src="/media/com_jbolo/vendors/modernizr-latest.js" type="text/javascript"></script>
<script src="/media/com_jbolo/vendors/jquery-ui/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="/media/com_jbolo/vendors/emojione/emojione.min.js" type="text/javascript"></script>
<script type="text/javascript">
			var site_link           ="http://www.stroff.com/";
			var user_id             =701;
			var template            ="facebook";
			var sendfile            =0;
			var groupchat           =1;
			var chathistory         =1;
			var is_su               =0;
			var show_activity       =0;
			var maxChatUsers        =10;
			var jb_minChatHeartbeat =5000;
			var jb_maxChatHeartbeat =30000;
			var allow_user_blocking = 1;

			var me_avatar_url ="http://www.stroff.com/media/com_jbolo/themes/"+template+"/images/me_avatar_default.png";
			var avatar_url    ="http://www.stroff.com/media/com_jbolo/themes/"+template+"/images/avatar_default.png";

			var jbolo_lang                                  = new Array();
			jbolo_lang["COM_JBOLO_UNAUTHORZIED_REQUEST"]    ="Error authorizing request. Please login first.";
			jbolo_lang["COM_JBOLO_ME"]                      ="Me";
			jbolo_lang["COM_JBOLO_GC_MAX_USERS"]            ="You have added max number of allowed people";
			jbolo_lang["COM_JBOLO_NO_USERS_ONLINE"]         ="No User is Online Now!";
			jbolo_lang["COM_JBOLO_SAYS"]                    =" says... ";
			jbolo_lang["COM_JBOLO_SET_STATUS"]              ="Set Status Here";
			jbolo_lang["COM_JBOLO_CHAT_WINDOW_EMPTY"]       ="Chat window is empty!";
			jbolo_lang["COM_JBOLO_ADD_ACTIVITY_PROMPT_MSG"] ="Do you want to add this chat as an activity to ticket?";
			jbolo_lang["COM_JBOLO_TICKED_ID_NO_SPACE"]      ="TicketId";
			jbolo_lang["COM_JBOLO_CHAT"]                    ="Chat";
			jbolo_lang["COM_JBOLO_SEARCH_PEOPLE"]           ="Search people";
			jbolo_lang["COM_JBOLO_AVAILABLE"]               ="Available";
			jbolo_lang["COM_JBOLO_AWAY"]                    ="Away";
			jbolo_lang["COM_JBOLO_BUSY"]                    ="Busy";
			jbolo_lang["COM_JBOLO_CLEAR_CUSTOM_MSGS"]       ="Clear custom messages";
			jbolo_lang["COM_JBOLO_MINIMIZE"]                ="Minimize";
			jbolo_lang["COM_JBOLO_CLOSE"]                   ="Close";
			jbolo_lang["COM_JBOLO_INVITE"]                  ="Invite";
			jbolo_lang["COM_JBOLO_VIEW_HISTORY"]            ="View chat history";
			jbolo_lang["COM_JBOLO_SEND_FILE"]               ="Send file";
			jbolo_lang["COM_JBOLO_CLEAR_CONVERSATION"]      ="Clear conversation";
			jbolo_lang["COM_JBOLO_ADD_USERS"]               ="Add users to chat";
			jbolo_lang["COM_JBOLO_ADD_ACTIVITY_TO_TICKET"]  ="Add Activity To Ticket";
			jbolo_lang["COM_JBOLO_LEAVE_CHAT"]              ="Leave chat";
			jbolo_lang["COM_JBOLO_LEAVE_CHAT_CONFIRM_MSG"]  ="You want to leave this chat? This cannot be undone unless some active chat member from this group chat adds you again!";
			jbolo_lang["COM_JBOLO_OFFLINE_MSG1"]            =" is offline. Messages you send will be delivered when ";
			jbolo_lang["COM_JBOLO_OFFLINE_MSG2"]            =" comes online.";
			jbolo_lang["COM_JBOLO_BLOCK_USER"]              ="Block this user";
			jbolo_lang["COM_JBOLO_BLOCKED_USER_CONFIRM"]    ="Are you sure about blocking this user?";

			techjoomla.jQuery(document).ready(function()
			{
				var cookie;
				var close_cookie;
				chat_window_function();
				outerlist_fun();
				list_opener();
				start_chat_session();
				setTimeout("poll_msg()",5000);
			});
		</script><script src="/media/com_jbolo/vendors/ajaxq.js" type="text/javascript"></script>
<script src="/media/com_jbolo/js/jbolo_chat.js" type="text/javascript"></script><script id="cmessage" type="text/x-jquery-tmpl"></script><script id="chatmessage" type="text/x-jquery-tmpl"><div class="onemsg" id=jb_msg_{{html mid}}>
	{{if me}}
		<div class="jbolo_avatar">
			<a href={{html purl}} title={{html me}}>
				<img src={{html avtr}} title="{{html me}}">
			</a>
		</div>
		<div class="onemsg_chat" title="{{html ts}}">
			<span class="chatuser">{{html me}}</span>
			<br/>
			<span class="chatmessage convert-emoji">{{html message}}</span>
		</div>
		<!--<div class="msg_sperator"></div>-->
	{{else}}
		<span class="chatmessage convert-emoji"  title="{{html ts}}">
			<p class="bradcastMsg">{{html message}}</p>
		</span>
	{{/if}}
</div>
</script><script id="outerlist" type="text/x-jquery-tmpl"><div class="jbolouserlist-in">
	<div id="loggeduser"></div>
	<div class="userstatus">
		<button id="userstatus" class="status_msg">{{html jbolo_lang['COM_JBOLO_SET_STATUS']}}</button>
		<button id="extstatus" class="extstatus">
			<img class="extstatus">
		</button>
	</div>
	<div id="updatedstatus" class="updatedstatus">
		<textarea id="textar" ignoreesc="true"></textarea>
	</div>
	<div id="extstatuslist" class="extstatuslist">
		<div id="exstatus" class="exstatus">
			<div class="green">
				<div class="uw">
					<div class="J-N-JX c6"></div>
				</div>
				<div class="uz" id="1">{{html jbolo_lang['COM_JBOLO_AVAILABLE']}}</div>
			</div>
			<hr class="J-Kh">
			<div class="red">
				<div class="uw">
					<div class="J-N-JX c8"></div>
				</div>
				<div class="uz" id="2">{{html jbolo_lang['COM_JBOLO_BUSY']}}</div>
			</div>
			<div class="orange">
				<div class="uw">
					<div class="J-N-JX c8"></div>
				</div>
				<div class="uz" id="3">{{html jbolo_lang['COM_JBOLO_AWAY']}}</div>
			</div>
			<hr class="J-Kh">
			<div class="grey">
				<div class="uw">
					<div class="J-N-JX "></div>
				</div>
				<div class="uz" id="5">{{html jbolo_lang['COM_JBOLO_CLEAR_CUSTOM_MSGS']}}</div>
			</div>
		</div>
	</div>
</div>

<div class="ulist">
	<!--<div id="userid" class="userdetails">
		<div></div>
		<div>
			<span class="uname" id="uname"></span>
		</div>
		<div></div>
	</div>-->
</div>

<div id="jbolo_toolbar" class="jbolo_toolbar">
	<div class="searchusers">
		<input type="text" id="jbolo_search" title="{{html jbolo_lang['COM_JBOLO_SEARCH_PEOPLE']}}" label="{{html jbolo_lang['COM_JBOLO_SEARCH_PEOPLE']}}" placeholder="{{html jbolo_lang['COM_JBOLO_SEARCH_PEOPLE']}}" />
	</div>
</div>
</script><script id="listtemplate" type="text/x-jquery-tmpl"><div id="singleListUser" class="clearfix">
	<div id="singleListUserDetails" class="useridd_hover">
		<div class="jbolo_avatar">
			<img src={{html avtr}} alt="{{html uname}}" title="{{html uname}}">
		</div>
		<div class="unamecover">
			<span class="uname" id ="uname">{{html uname}}</span>
			<span class="status_msg" id="sts" title="{{html stsm}}">{{html stsm}}</span>
			<div class="statusicon_{{html sts}}" id="sti"></div>
		</div>
	</div>
</div>
</script><script id="logged_user" type="text/x-jquery-tmpl"><div class="jbolo_avatar" id="userid">
	<a href={{html purl}}>
		<img src={{html avtr}}>
	</a>
</div>
<div class="statusicon_{{html sts}}" id="mestatus"></div>
<div class="loggedin-user">
	<span>{{html uname}}</span>
</div></script><script id="chatwindow" type="text/x-jquery-tmpl"><div class="jbolo_container" id="{{html chatid}}_outer">
	<div class="jbolo_container" id="{{html chatid}}">
		<div class="jbolo_title" id="{{html id}}">
			<div class="{{html stcls}}" id="statusicon"></div>
			<div class="uname" id="userid">
				<span class="chatuser" id="wt" title="{{html user}}">{{html user}}</span>
			</div>
			<div class="windowfuncs">
				<button id="{{html id}}" class="jbolo_mini" alt="{{html jbolo_lang['COM_JBOLO_MINIMIZE']}}" title="{{html jbolo_lang['COM_JBOLO_MINIMIZE']}}"></button>
				<button class="jbolo_close" id="{{html id}}" alt="{{html jbolo_lang['COM_JBOLO_CLOSE']}}" title="{{html jbolo_lang['COM_JBOLO_CLOSE']}}" ></button>
			</div>
		</div>
		<div class="remainingwindow" id="{{html id}}_chat">
			<div id="{{html id}}_addusers" class="addusers">
				{{if ctype==2}}
					<div id="bg" class="plist"></div>
				{{/if}}
				<input type="hidden" class="inhd" id="" value=""></input>
				<input type="text" autocomplete="off"  class="add_users" id="add_{{html id}}"  value="" tabindex="0" aria-haspopup="true"></input>
				<button type="button" id="{{html chattype}}" class="invite" >{{html jbolo_lang['COM_JBOLO_INVITE']}}</button>
			</div>
			<div class="jbolo_tools" id="jbolo_tools">
				{{if chathistory===1}}
					<div>
						<button id="chatHistory" title="{{html jbolo_lang['COM_JBOLO_VIEW_HISTORY']}}" class="chatHistory" alt="{{html jbolo_lang['COM_JBOLO_VIEW_HISTORY']}}" onClick="javascript:chatHistory({{html id}});"></button>
					</div>
				{{/if}}
				{{if sendfile===1}}
					<div>
						<button id="sendfile" title="{{html jbolo_lang['COM_JBOLO_SEND_FILE']}}" class="sendfile" alt="{{html jbolo_lang['COM_JBOLO_SEND_FILE']}}" onClick="javascript:sendFile({{html id}});"></button>
					</div>
				{{/if}}
				<div>
					<button id="clearconversation" title="{{html jbolo_lang['COM_JBOLO_CLEAR_CONVERSATION']}}" class="clearconversation" alt="{{html jbolo_lang['COM_JBOLO_CLEAR_CONVERSATION']}}" onClick="javascript:clearChat({{html id}});"></button>
				</div>
				{{if groupchat===1}}
					<div>
						<button id="{{html id}}" title="{{html jbolo_lang['COM_JBOLO_ADD_USERS']}}" class="addpeople" alt="{{html jbolo_lang['COM_JBOLO_ADD_USERS']}}"></button>
					</div>
					{{if ctype==2}}
						<div>
							<button id="leavechat" title="{{html jbolo_lang['COM_JBOLO_LEAVE_CHAT']}}" class="leave" alt="{{html jbolo_lang['COM_JBOLO_LEAVE_CHAT']}}" onClick="javascript:leaveChat({{html id}});"></button>
						</div>
					{{/if}}
				{{/if}}
				{{if ctype!=2 && allow_user_blocking==1}}
					<div>
						<button id="block_user_{{html id}}" title="{{html jbolo_lang['COM_JBOLO_BLOCK_USER']}}" class="block_user" alt="{{html jbolo_lang['COM_JBOLO_BLOCK_USER']}}"></button>
					</div>
				{{/if}}

				{{if is_su===1}}
					<div>
						<button id="addActivityToTicket" title="{{html jbolo_lang['COM_JBOLO_ADD_ACTIVITY_TO_TICKET']}}" class="addTicketActivity" alt="{{html jbolo_lang['COM_JBOLO_ADD_ACTIVITY_TO_TICKET']}}" onClick="javascript:addActivityToTicket({{html id}});"></button>
					</div>
				{{/if}}
			</div>
			<div class="chatmessages" id="{{html chatid}}_chat"></div>
			<div class="inmessages" id="{{html chatid}}_chatin">
				<textarea class="chatboxtextarea" id="chatTextArea_{{html chatid}}" ignoreesc="true" onkeydown="javascript: return checkChatBoxInputKey(event,this);"></textarea>
				<div class="smiley">
					<button id="smiley" class="smiley" onclick="javascript:showSmiley(this);"></button>
				</div>
			</div>
		</div>
	</div>
</div>
</script><script id="pdetails" type="text/x-jquery-tmpl"><div id="{{html userid}}" class="userdetails">
	{{if stcls=='statusicon_null'}}
		<div class="statusicon_4" id="status"></div>
	{{else}}
		<div class="{{html stcls}}" id="status"></div>
	{{/if}}
	<div>
		<span class="uname" id="uname">
			<a href={{html purl}}>{{html username}}</a>
		</span>
	</div>
</div>
</script>
<link rel="icon" type="image/png" href="http://www.stroff.com//templates/responsive2/favicon.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>
<base href="http://www.stroff.com/jobseekers-search"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="Internship Singapore, Internship, Singapore Internship, Internships in Singapore, Internship in Singapore, Internships Singapore, Intern Singapore, Sg Intern, Summer Internship Singapore, Singapore Internships, Internship Sg, Singapore Intern, Part Time Internship Singapore, Internship Opportunities Singapore, Internships"/>
<meta name="description" content="Build your Career Capital with Stroff! Professional Networking, Career Guidance, Events, Resources and Exciting Jobs (Full-Time, Graduate, Internship &amp; Part-Time) in Singapore awaits you."/>
<title>Jobseekers</title>
<link rel="stylesheet" href="http://www.stroff.com/media/zenshortcode/fontawesome/css/font-awesome.min.css" type="text/css"/>
<link rel="stylesheet" href="http://www.stroff.com/components/com_employers/assets/css/search/search.css" type="text/css"/>
<link rel="stylesheet" href="http://www.stroff.com/components/com_easysocial/themes/wireframe/styles/base.min.css" type="text/css"/>
<link rel="stylesheet" href="http://www.stroff.com/components/com_easysocial/themes/wireframe/styles/style.min.css" type="text/css"/>
<link rel="stylesheet" href="http://www.stroff.com/components/com_easysocial/themes/wireframe/styles/more.min.css" type="text/css"/>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300:latin%7CRoboto:600:latin%7CRochester%7CRoboto" type="text/css"/>
<link rel="stylesheet" href="/templates/responsive2/css/theme.aquarium.css" type="text/css"/>
<link rel="stylesheet" href="/media/jui/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="/templates/responsive2/css/guest.css" type="text/css"/>
<link rel="stylesheet" href="http://www.stroff.com/templates/responsive2/html/com_easysocial/css/custom.css" type="text/css"/>
<link rel="stylesheet" href="http://www.stroff.com/modules/mod_easysocial_toolbar/styles/style.min.css" type="text/css"/>
<link rel="stylesheet" href="http://www.stroff.com/modules/mod_feedback/assets/css/mod_feedback.css" type="text/css"/>
<script src="/media/jui/js/jquery.min.js" type="text/javascript"></script>
<script src="/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
<script src="/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://www.stroff.com/media/colorbox-master/jquery.colorbox-min.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/../zengrid/libs/zengrid/js/smoothscroll.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/../zengrid/libs/zengrid/js/zen.accordion.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/../zengrid/libs/zengrid/js/lazyload.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/../zengrid/libs/zengrid/js/meanmenu.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/../zengrid/libs/zengrid/js/jquery.resmenu.min.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/../zengrid/libs/zengrid/js/modernizr.touch.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/../zengrid/libs/zengrid/js/slidebars.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/scripts.js" type="text/javascript"></script>
<script src="/templates/responsive2/zengrid/libs/zengrid/js/meanmenu.js" type="text/javascript"></script>
<script src="/templates/responsive2/js/js.js" type="text/javascript"></script>
<script src="http://www.stroff.com/media/foundry/4.0/config/06cbdd0a9d16352fafa833301dce765e.js" type="text/javascript"></script>
<script src="http://www.stroff.com/media/com_easysocial/config/5776c039de57e1f57eec86f9c020739a.js" type="text/javascript"></script>
<script src="http://www.stroff.com/modules/mod_feedback/assets/js/mod_feedback.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
  </script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){

    if (window.innerWidth < 600) {
        var wrapper = document.querySelectorAll(".es-responsive");

        if (wrapper.length < 1) {
        	return;
        }

        for(var i = 0; i < wrapper.length; i++) {
            wrapper[i].classList.add("w320" ,"w480" ,"w600");
        }
    }
});
</script>
<script defer async src="http://www.stroff.com/media/com_easysocial/scripts/easysocial-1.4.11.static.min.js"></script>
<meta name="easysocial:token" content="84dab8143ead7419fc6895abe582c3f7"/>
<script defer async src="http://www.stroff.com/media/com_easysocial/resources/cb0e087308b21557ed389564060a6e65.js"></script>
<meta name="foundry:location:language" content="en"/>
<link rel="stylesheet" href="/templates/responsive2/css/colorbox/colorbox.css" type="text/css"/> <link rel="stylesheet" href="/templates/responsive2/css/custom/general.css" type="text/css"/> <link rel="stylesheet" href="/templates/responsive2/css/custom/articles.css" type="text/css"/> <link rel="stylesheet" href="/templates/responsive2/css/custom/customizations.css" type="text/css"/>
<style type="text/css">html>body{font-family:'Roboto';}h1,h2,h3,h4,h5,h6,blockquote{font-family:'Roboto';}#navwrap li a,#navwrap li span{font-family:'Roboto';}#logo h1,#logo h2,#logo h3,#logo h4{font-family:'Rochester';}.open-panel{font-family:Roboto;}</style>
<a id="logo_mobile" href="http://www.stroff.com/">Stroff</a>
 
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?3QrWrNgbvhRIo89GJ8phXK813H7ZPIB6';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
 
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42751496-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body>
 
<div id="zen-wrap">
<section class="section_iframe">
<div class="zen-container relative">
<div class="moduletable">
<div id="chat_us">Quick Chat</div>
<style type="text/css">#chat_us:hover{background:#269600;}@media only screen and (min-width : 1050px)
{#chat_us{display:block;z-index:100;cursor:pointer;position:fixed;top:282px;right:25px;white-space:nowrap;padding:2px 7px;background:green;color:#eee;font-weight:bold;font-size:13px;-webkit-transform:rotate(270deg);-webkit-transform-origin:right top;-moz-transform:rotate(270deg);-moz-transform-origin:right top;-ms-transform:rotate(270deg);-ms-transform-origin:right top;-o-transform:rotate(270deg);-o-transform-origin:right top;transform:rotate(270deg);transform-origin:right top;}}@media only screen and (max-width : 1050px)
{#chat_us{display:block;top:auto;z-index:100;cursor:pointer;position:fixed;bottom:113px;right:25px;white-space:nowrap;padding:2px 7px;background:green;color:#eee;font-weight:bold;font-size:13px;-webkit-transform:rotate(270deg);-webkit-transform-origin:right top;-moz-transform:rotate(270deg);-moz-transform-origin:right top;-ms-transform:rotate(270deg);-ms-transform-origin:right top;-o-transform:rotate(270deg);-o-transform-origin:right top;transform:rotate(270deg);transform-origin:right top;}}@media only screen and (device-width : 1050px)
{#chat_us{top:auto;}}</style>
<script type="text/javascript">
 jQuery.noConflict(); 
(function($) {	
	$(document).ready(function(){
	   
       
       $zopim(function() {
           $zopim.livechat.hideAll();
           $zopim.livechat.button.setColor('#78a400');
       });
       
       
        $('#chat_us').click(function(){
            if($('.zopim').is(":visible"))
            {
               $zopim.livechat.hideAll();
            }
            else
            {
                  $zopim.livechat.window.show();
            }
        })
         
         
         //hide_minimize
         $zopim(function() {


             $zopim.livechat.window.onHide(haha);
              function haha(){
                  $zopim.livechat.hideAll();
              }
          
          })
      
         
	   
 });
}) (jQuery);

 </script>
</div>
<div class="moduletable">
<div class="control_iframe">
</div>
<div id="content_iframe" style="display: none;">
<div style="position: relative;">
 
<div class="main_iframe">
<div id="_bar"> <div class="minimize"></div> </div>
<iframe class="kaka" frameborder="0" name="webklipper-publisher-widget-container-frame" marginheight="0" marginwidth="0" style="z-index: 16776279; position: relative; background-color: transparent; bottom: 0px; right: 0px; border: medium none; overflow: auto; visibility: visible; height: 100%; width: 100%; box-sizing: content-box; font-size: 100%; line-height: 1em; font-weight: normal; font-family: Arial,sans-serif; display: block; opacity: 1;" src="https://docs.google.com/forms/d/1M2VOSBmnk2ZcgnV13Ym_RamrhWs1h1wBDsalZ85jDaE/viewform?embedded=true">
</iframe>
</div>
</div>
</div>
<a target="_blank" href="https://docs.google.com/forms/d/1M2VOSBmnk2ZcgnV13Ym_RamrhWs1h1wBDsalZ85jDaE/viewform"><img id="button_rate_mobile" src="http://www.stroff.com/modules/mod_feedback/assets/images/rate_us.png"/></a> </div>
</div>
</section>
<a id="home-link" name="home-link"></a>
 
<div id="sticky-fill" class="hidden"></div>
<section id="navwrap" class="wrap ">
<div class="zen-container">
<div class="navbar-default zen-row">
<div class="zen-spotlight">
<div id="menu" class="zen-menu zen-menu-horizontal zen-menu-center zen-menu-fading">
<a id="main_logo" style="display: inline; padding:0px;" href="http://www.stroff.com/">Stroff</a>
<div class="navbar-header ">
<nav role="navigation">
 
<ul class="zen-menu-89 ">
<li class="item-176"><a href="/user-profile">
MY PROFILE </a> </li><li class="item-1012 deeper parent"><span class="zen-menu-heading">
SEARCH </span>
<ul class="zen-menu-child cols-1"><li class="item-1160"><a href="/job-classifieds">Job Classifieds</a></li><li class="item-1161 active"><a href="/jobseekers-search">Jobseekers</a></li><li class="item-1163"><a href="/employers-search">Employers</a></li></ul></li><li class="item-1063"><a href="/community">COMMUNITY</a></li><li class="item-999"><a href="/events">EVENTS</a></li><li class="item-1069"><a href="/resources">RESOURCES</a></li></ul>
 
</nav>
</div>
</div>
</div>
</div>
</div>
</section>
 
<section id="mainWrap" class="clearfix mr ">
<a id="main-link" name="main-link"></a>
<section id="accountwrap" class="clearfix">
<div class="zen-container">
<div class="zen-row">
<div class="zen-spotlight">
 
<div id="account" class="zg-col zg-col-12">
<div class="moduletable ">
<div class="module-inner">
<div class="zen-module-body">
<div id="fd" class="es mod-es-toolbar es-responsive module-social">
<div class="navbar es-toolbar wide" data-notifications>
<div class="navbar-inner">
<div class="es-toolbar-wrap">
 
<ul class="fd-nav pull-left">
<li class="toolbarItem toolbar-home" data-toolbar-item>
<a data-original-title="Dashboard" data-placement="top" data-es-provide="tooltip" href="/">
<i class="fa fa-home"></i>
<span class="visible-phone">Dashboard</span>
</a>
</li>
<li class="divider-vertical"></li>
<li class="toolbarItem">
<a data-original-title="FORUM / Q&A " data-es-provide="tooltip" href="/forum-q-a/index">
<i class="fa fa-comments"></i>
</a>
</li>
<li class="toolbarItem">
<a data-original-title="BLOG" data-es-provide="tooltip" href="/resources">
<i class="fa fa-pencil-square-o"></i>
</a>
</li>
<li class="toolbarItem" data-popbox="module://easysocial/friends/popbox" data-popbox-toggle="click" data-popbox-position="bottom-left" data-popbox-collision="none" data-notifications-friends>
<a href="javascript:void(0);" class="loadRequestsButton" data-original-title="Contact Requests" data-placement="top" data-es-provide="tooltip">
<i class="fa fa-users"></i>
<span class="visible-phone">Contact Requests</span>
<span class="label label-notification" data-notificationFriends-counter></span>
</a>
</li>
<li class="toolbarItem" data-popbox="module://easysocial/conversations/popbox" data-popbox-toggle="click" data-popbox-position="bottom-left" data-popbox-collision="none" data-notifications-conversations>
<a href="javascript:void(0);" data-original-title="Conversations" data-placement="top" data-es-provide="tooltip">
<i class="fa fa-envelope"></i>
<span class="visible-phone">Conversations</span>
<span class="label label-notification" data-notificationConversation-counter></span>
</a>
</li>
<li class="toolbarItem has-notice" data-popbox="module://easysocial/notifications/popbox" data-popbox-toggle="click" data-popbox-position="bottom-left" data-popbox-collision="none" data-autoread="" data-user-id="701" data-notifications-system>
<a href="javascript:void(0);" data-original-title="Notifications" data-placement="top" data-es-provide="tooltip">
<i class="fa fa-globe"></i>
<span class="visible-phone">Notifications</span>
<span class="label label-notification" data-notificationSystem-counter>19</span>
</a>
</li>
</ul>
<form action="/jobseekers-search" method="post">
<div class="fd-navbar-search pull-right" data-nav-search>
<i class="fa fa-search"></i>
<input type="text" name="q" class="search-query" autocomplete="off" data-nav-search-input placeholder="Search"/>
</div>
<div class="es-navbar-search-filter dropdown pull-right" data-nav-search-filter>
<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" data-filter-button>
<span class="fa fa-cog"></span>
</a>
<ul class="es-navbar-dropdown es-dropdown-right fd-reset-list dropdown-menu">
<li class="es-navbar-dropdown-head">
<div class="es-filter-header">
<div>Show results from selected filters below:</div>
</div>
<div class="es-filter-helper">
<div class="col-cell">
<div class="select-all">
<a href="javascript:void(0);" data-filter-selectall>Check All</a>
</div>
</div>
<div class="col-cell">
<div class="deselect-all">
<a href="javascript:void(0);" data-filter-deselectall>Uncheck All</a>
</div>
</div>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-0" type="checkbox" name="filtertypes[]" value="23048-EasyBlog" data-search-filtertypes />
<label for="search-type-0">
Blog </label>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-1" type="checkbox" name="filtertypes[]" value="23060-EasySocial.Albums" data-search-filtertypes />
<label for="search-type-1">
Albums </label>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-2" type="checkbox" name="filtertypes[]" value="23066-EasySocial.Events" data-search-filtertypes />
<label for="search-type-2">
Events </label>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-3" type="checkbox" name="filtertypes[]" value="23069-EasySocial.Groups" data-search-filtertypes />
<label for="search-type-3">
Groups </label>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-4" type="checkbox" name="filtertypes[]" value="23070-EasySocial.Photos" data-search-filtertypes />
<label for="search-type-4">
Photos </label>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-5" type="checkbox" name="filtertypes[]" value="24450-EasySocial.Users" data-search-filtertypes />
<label for="search-type-5">
People </label>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-6" type="checkbox" name="filtertypes[]" value="35518-Category" data-search-filtertypes />
<label for="search-type-6">
Category </label>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-7" type="checkbox" name="filtertypes[]" value="35519-Article" data-search-filtertypes />
<label for="search-type-7">
Article </label>
</div>
</li>
<li>
<div class="es-checkbox">
<input id="search-type-8" type="checkbox" name="filtertypes[]" value="35901-EasySocial.Videos" data-search-filtertypes />
<label for="search-type-8">
Videos </label>
</div>
</li>
</ul>
</div>
<input type="hidden" name="Itemid" value="263"/>
<input type="hidden" name="controller" value="search"/>
<input type="hidden" name="task" value="query"/>
<input type="hidden" name="option" value="com_easysocial"/>
<input type="hidden" name="84dab8143ead7419fc6895abe582c3f7" value="1"/>
</form>
<ul class="fd-nav pull-right">
<li class="toolbarItem toolbar-profile" data-toolbar-profile data-popbox data-popbox-id="fd" data-popbox-component="es" data-popbox-type="toolbar" data-popbox-toggle="click" data-popbox-position="bottom-right" data-popbox-target=".toobar-profile-popbox">
<a href="javascript:void(0);" class="dropdown-toggle_ login-link loginLink">
<span class="es-avatar">
<img src="http://www.stroff.com/media/com_easysocial/avatars/users/701/r_ajax_42501_1437578145_hehe abc.jpg" alt="Job seeker"/>
</span>
<span class="toolbar-user-name">Job seeker</span>
<b class="caret"></b>
</a>
<div style="display:none;" class="toobar-profile-popbox" data-toolbar-profile-dropdown>
<ul class="popbox-dropdown-menu dropdown-menu-user" style="display: block;">
<li>
<h5 class="ml-10">
<i class="fa fa-home"></i> Account </h5>
</li>
<li class="divider"></li>
<li>
<a href="/user-profile">
My Profile </a>
</li>
<li>
<a href="/contacts">
Contacts </a>
</li>
<li>
<a href="/contacts/invite">
Invite Contacts </a>
</li>
<li>
<a href="/followers">
Followers </a>
</li>
<li>
<a href="/albums/user/701-job-seeker">
Photos </a>
</li>
<li>
<a href="/videos">
Videos </a>
</li>
<li>
<a href="/groups">
Groups </a>
</li>
<li>
<a href="/events">
Events </a>
</li>
<li>
<a href="/badges/achievements">
Achievements </a>
</li>
<li>
<a href="/points/history/701-job-seeker">
Points </a>
</li>
<li>
<a href="/conversations">
Conversations </a>
</li>
<li>
<a href="/apps">
Applications </a>
</li>
<li class="divider"></li>
<li>
<h5 class="ml-10">
<i class="fa fa-cloud"></i> Discover </h5>
</li>
<li class="divider"></li>
<li>
<a href="/users">
Browse Users </a>
</li>
<li>
<a href="/search/advanced">
Advanced Search </a>
</li>
<li class="divider"></li>
<li>
<h5 class="ml-10">
<i class="fa fa-cog"></i> Preferences </h5>
</li>
<li class="divider"></li>
<li>
<a href="/user-profile/edit">
Edit Profile </a>
</li>
<li>
<a href="/user-profile/editPrivacy">
Privacy Settings </a>
</li>
<li>
<a href="/user-profile/editNotifications">
Notification Settings </a>
</li>
<li>
<a href="/activities">
Activity Log </a>
</li>
<li class="divider"></li>
<li>
<a href="javascript:void(0);" class="logout-link" data-toolbar-logout-button>
Logout </a>
<form class="logout-form" action="/jobseekers-search" data-toolbar-logout-form method="post">
<input type="hidden" name="return" value=""/>
<input type="hidden" name="option" value="com_easysocial"/>
<input type="hidden" name="controller" value="account"/>
<input type="hidden" name="task" value="logout"/>
<input type="hidden" name="view" value=""/>
<input type="hidden" name="84dab8143ead7419fc6895abe582c3f7" value="1"/>
</form>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</div>
<script type="text/javascript">


	
EasySocial
.require()
.script('site/toolbar/notifications', 'site/search/toolbar', 'site/layout/responsive')
.done(function($){

	// Implement controller on friend requests.
	$('[data-notifications]').implement(EasySocial.Controller.Notifications, {
		friendsInterval: 30,
		systemInterval: 30,
        conversationsInterval: 30,
        guest: false	});

	$('[data-nav-search]').implement(EasySocial.Controller.Search.Toolbar);
});


</script>
</div>
</div>
</div>
</div>
</div>
 
</div>
</div>
</div>
</section>
<div class="zen-container">
<div class="zen-row">
<div class="mainwrap zen-spotlight">
<div id="midCol" class="zg-col zg-col-12 ">
<div id="system-message-container">
</div>
<main role="main">
<div id="fd" class="rows es view-users">
<div class="es-container" data-users>
<div class="col-sm-3 no-padding search_sidebar">
<form action="" method="get">
<input type="hidden" value="com_jobseekers" name="option">
<input type="hidden" value="search" name="view">
<div class="sb_head"><div class="widget-title">Jobseekers Search </div></div>
<div class="sb_content">
<div class="group_sb_item">
<label class="">Field of Study</label>
<div class="rows">
<select name="study">
<option value="">Select</option>
<option value="58">Accounting</option>
<option value="25">Advertising</option>
<option value="12">Agriculture/Aquaculture/Forestry</option>
<option value="22">Airline Operation/Airport Management</option>
<option value="45">Architecture</option>
<option value="35">Arts (General)</option>
<option value="54">Biochemistry</option>
<option value="13">Biology</option>
<option value="14">Bio-Technology</option>
<option value="44">Building & Construction</option>
<option value="59">Business (General)</option>
<option value="18">Business Administration/Management</option>
<option value="15">Chemistry</option>
<option value="19">Commerce</option>
<option value="68">Computing / I.T. (Software)</option>
<option value="69">Computing / I.T. (Hardware)</option>
<option value="85">Corporate Secretarial</option>
<option value="29">Dentistry</option>
<option value="86">Design (General)</option>
<option value="87">Design/Art/Creative Multimedia</option>
<option value="65">Early Childhood Education</option>
<option value="66">Education/Teaching/Training</option>
<option value="20">Economics</option>
<option value="49">Engineering (General)</option>
<option value="3">Engineering (Aviation/Aeronautics/Astronautics)</option>
<option value="4">Engineering (Bioengineering/Biomedical)</option>
<option value="5">Engineering (Chemical)</option>
<option value="6">Engineering (Civil)</option>
<option value="7">Engineering (Computer/Telecommunication)</option>
<option value="8">Engineering (Electrical/Electronic)</option>
<option value="9">Engineering (Environmental/Health/Safety)</option>
<option value="10">Engineering (Industrial)</option>
<option value="50">Engineering (Marine & Offshore Technology)</option>
<option value="51">Engineering (Mechanical)</option>
<option value="52">Engineering (Mechatronics)</option>
<option value="55">Environmental & Water Technology</option>
<option value="46">Facilities Management</option>
<option value="73">Film Production</option>
<option value="63">Finance</option>
<option value="71">Financial Informatics</option>
<option value="23">Food & Beverage Services Management</option>
<option value="56">Food Technology</option>
<option value="60">Human Resources</option>
<option value="94">Graphics Design</option>
<option value="47">Interior Design</option>
<option value="27">Humanities/Liberal Arts</option>
<option value="67">Information Technology (I.T.)</option>
<option value="37">Language</option>
<option value="61">Law / Legal Studies</option>
<option value="38">Literature</option>
<option value="81">Logistics / Supply Chain Management</option>
<option value="88">Marketing</option>
<option value="74">Mass Communication / Public Relations</option>
<option value="39">Mathematics</option>
<option value="72">Media(media art)</option>
<option value="28">Medicine & Healthcare</option>
<option value="70">Network Systems and Security</option>
<option value="76">Nursing</option>
<option value="77">Optometry</option>
<option value="95">Performance Arts/Drama/Theatre</option>
<option value="78">Pharmacy</option>
<option value="57">Physics</option>
<option value="40">Psychology</option>
<option value="41">Political Science</option>
<option value="42">Public Administration</option>
<option value="89">Real Estate</option>
<option value="90">Secretarial</option>
<option value="53">Science (General)</option>
<option value="11">Sciences</option>
<option value="21">Services</option>
<option value="92">Social Sciences</option>
<option value="91">Social Work</option>
<option value="43">Sociology</option>
<option value="79">Surgical Science</option>
<option value="48">Surveyors / Valuers</option>
<option value="62">Tax</option>
<option value="93">Telecommunications</option>
<option value="82">Tourism / Hospitality Management</option>
<option value="80">Veterinary Science</option>
<option value="31">Others</option>
</select>
</div>
</div>
<div class="group_sb_item">
<label class="">Qualification</label>
<div class="rows">
<select name="qualification">
<option value="">Select</option>
<option value="10">PhD</option>
<option value="11">MBA</option>
<option value="6">Master Degree</option>
<option value="5">Bachelor Degree</option>
<option value="4">Graduate Diploma</option>
<option value="12">Higher/Advanced Diploma</option>
<option value="13">Diploma</option>
<option value="14">Higher Nitec</option>
<option value="15">Nitec</option>
<option value="16">Institute of Technical Education</option>
<option value="17">Junior College</option>
<option value="1">Secondary School</option>
<option value="18">Primary School</option>
<option value="19">Little Formal Education</option>
</select>
</div>
</div>
<div class="group_sb_item">
<label class="">Company</label>
<div class="rows">
<input type="text" name="conpany_name" placeholder="enter your value here" value="" class="form-control input-sm">
</div>
</div>
<div class="group_sb_item">
<label class="">Profession</label>
<div class="rows">
<select name="profession">
<option value="">Select</option>
<option value="2">Accounting/Finance</option>
<option value="3">Audit & Taxation</option>
<option value="4">Banking/Financial</option>
<option value="5">Corporate Finance/Investment</option>
<option value="6">General/Cost Accounting</option>
<option value="7">Admin/Human Resources</option>
<option value="8">Clerical/Administrative</option>
<option value="9">Human Resources</option>
<option value="10">Secretarial</option>
<option value="11">Top Management</option>
<option value="12">Arts/Media/Communications</option>
<option value="13">Advertising</option>
<option value="14">Arts/Creative Design</option>
<option value="15">Entertainment</option>
<option value="16">Public Relations</option>
<option value="17">Building/Construction</option>
<option value="18">Architect/Interior Design</option>
<option value="19">Civil Engineering/Construction</option>
<option value="20">Property/Real Estate</option>
<option value="21">Quantity Surveying</option>
<option value="22">Computer/Information Technology</option>
<option value="23">IT - Hardware</option>
<option value="24">IT - Network/Sys/DB Admin</option>
<option value="25">IT - Software</option>
<option value="26">Education/Training</option>
<option value="27">Education</option>
<option value="28">Training & Dev.</option>
<option value="29">Engineering</option>
<option value="30">Chemical Engineering</option>
<option value="31">Electrical Engineering</option>
<option value="32">Electronics Engineering</option>
<option value="33">Environmental Engineering</option>
<option value="34">Industrial Engineering</option>
<option value="35">Mechanical/Automotive Engineering</option>
<option value="81">Mechatronics Engineering</option>
<option value="36">Oil/Gas Engineering</option>
<option value="37">Other Engineering</option>
<option value="38">Healthcare</option>
<option value="39">Doctor/Diagnosis</option>
<option value="40">Pharmacy</option>
<option value="41">Nurse/Medical Support</option>
<option value="42">Hotel/Restaurant</option>
<option value="43">Food/Beverage/Restaurant</option>
<option value="44">Hotel/Tourism</option>
<option value="45">Manufacturing</option>
<option value="46">Maintenance</option>
<option value="47">Manufacturing</option>
<option value="48">Process Design & Control</option>
<option value="49">Purchasing/Material Mgmt</option>
<option value="50">Quality Assurance</option>
<option value="51">Sales/Marketing</option>
<option value="52">Sales - Corporate</option>
<option value="53">Marketing/Business Dev</option>
<option value="54">Merchandising</option>
<option value="55">Retail Sales</option>
<option value="56">Sales - Eng/Tech/IT</option>
<option value="57">Sales - Financial Services</option>
<option value="58">Telesales/Telemarketing</option>
<option value="59">Sciences</option>
<option value="60">Actuarial/Statistics</option>
<option value="61">Agriculture</option>
<option value="62">Aviation</option>
<option value="63">Biotechnology</option>
<option value="64">Chemistry</option>
<option value="65">Food Tech/Nutritionist</option>
<option value="66">Geology/Geophysics</option>
<option value="67">Science & Technology</option>
<option value="68">Services</option>
<option value="69">Security/Armed Forces</option>
<option value="70">Customer Service</option>
<option value="72">Law/Legal Services</option>
<option value="73">Personal Care</option>
<option value="74">Social Services</option>
<option value="75">Tech & Helpdesk Support</option>
<option value="71">Logistics/Supply Chain/Transportation</option>
<option value="76">Others</option>
<option value="77">General Work</option>
<option value="78">Journalist/Editors</option>
<option value="79">Publishing</option>
<option value="80">Others</option>
</select>
</div>
</div>
<div class="group_sb_item">
<label class="">Job Title</label>
<div class="rows">
<input type="text" name="job_title" placeholder="enter your value here" value="" class="form-control input-sm">
</div>
</div>
<div class="group_sb_item">
<label class="">Industry</label>
<div class="rows">
<select name="industry">
<option value="">Select</option>
<option value="6">Accounting / Audit / Tax Services</option>
<option value="7">Advertising / Marketing / Promotion / PR </option>
<option value="8">Aerospace / Aviation / Airline </option>
<option value="9">Agricultural / Plantation / Poultry / Fisheries</option>
<option value="10">Apparel </option>
<option value="11">Architectural Services / Interior Designing</option>
<option value="12">Arts / Design / Fashion</option>
<option value="13">Automobile / Automotive Ancillary / Vehicle</option>
<option value="14">Banking / Financial Services </option>
<option value="15">BioTechnology / Pharmaceutical / Clinical research</option>
<option value="16">Call Center / IT-Enabled Services / BPO</option>
<option value="17">Chemical / Fertilizers / Pesticides</option>
<option value="18">Computer / Information Technology (Hardware)</option>
<option value="19">Computer / Information Technology (Software)</option>
<option value="20">Construction / Building / Engineering </option>
<option value="21">Consulting (Business &amp; Management)</option>
<option value="22">Consulting (IT, Science, Engineering &amp; Technical)</option>
<option value="23">Consumer Products / FMCG </option>
<option value="24">Education</option>
<option value="25">Electrical &amp; Electronics</option>
<option value="26">Entertainment / Media</option>
<option value="27">Environment / Health / Safety</option>
<option value="28">Exhibitions / Event management / MICE </option>
<option value="29">Food &amp; Beverage / Catering / Restaurant </option>
<option value="30">Gems / Jewellery</option>
<option value="31">General &amp; Wholesale Trading</option>
<option value="32">Government / Defence </option>
<option value="33">Grooming / Beauty / Fitness</option>
<option value="34">Healthcare / Medical </option>
<option value="35">Heavy Industrial / Machinery / Equipment</option>
<option value="36">Hotel / Hospitality</option>
<option value="37">Human Resources Management / Consulting</option>
<option value="66">Internet</option>
<option value="38">Insurance</option>
<option value="39">Journalism</option>
<option value="40">Law / Legal</option>
<option value="41">Library / Museum</option>
<option value="42">Manufacturing / Production</option>
<option value="43">Marine / Aquaculture</option>
<option value="44">Mining</option>
<option value="45">Non-Profit Organisation / Social Services / NGO</option>
<option value="46">Oil / Gas / Petroleum</option>
<option value="47">Others</option>
<option value="48">Polymer / Plastic / Rubber / Tyres</option>
<option value="49">Printing / Publishing</option>
<option value="50">Property / Real Estate</option>
<option value="51">R&amp;D</option>
<option value="52">Repair and Maintenance Services</option>
<option value="53">Retail / Merchandise</option>
<option value="54">Science &amp; Technology </option>
<option value="55">Security / Law Enforcement</option>
<option value="56">Semiconductor / Wafer Fabrication</option>
<option value="57">Sports</option>
<option value="58">Stockbroking / Securities</option>
<option value="59">Telecommunication</option>
<option value="60">Textiles / Garment</option>
<option value="61">Tobacco</option>
<option value="62">Transportation / Logistics</option>
<option value="63">Travel / Tourism </option>
<option value="64">Utilities / Power</option>
<option value="65">Wood / Fibre / Paper </option>
</select>
</div>
</div>
<div class="group_sb_item">
<button type="submit" class="">Search</button>
</div>
</div>
</form>
</div>
<div class="col-sm-9 search_content">
<div class="row-table mb-15 rows">
<div class="col-cell cell-mid">&nbsp;</div>
<div class="col-cell cell-mid">
<div class="btn-group btn-group-sm btn-group-view-apps pull-right">
<a class="btn btn-es active" data-es-provide="tooltip" data-placement="bottom" data-original-title="Sort by recently registered" href="/jobseekers-search?view=search&amp;sort=latest">
<i class="fa fa-fire "></i>
Recently Registered</a>
<a class="btn btn-es" data-es-provide="tooltip" data-placement="bottom" data-original-title="Sort by recently logged in" href="/jobseekers-search?view=search&amp;sort=lastlogin">
<i class="fa fa-sign-in "></i>
Recently Logged In </a>
<a class="btn btn-es trending" data-type="alphabetical" data-es-provide="tooltip" data-placement="bottom" data-original-title="Sort by alphabetical order" href="/jobseekers-search?view=search&amp;sort=alphabetical">
<i class="fa fa-sort-alpha-asc"></i>
Name</a>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15136">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15136-chan-cui-fang"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15136/5044f4ba432be4a1cf8260a39624647a_small.jpg" alt="Chan Cui Fang"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15136-chan-cui-fang">Chan Cui Fang</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15136-chan-cui-fang" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15136-chan-cui-fang" class="fd-small muted">
<i class="fa fa-share-alt "></i>
1 Follower </a>
</li>
<li>
<a href="/badges/achievements/15136-chan-cui-fang" class="fd-small muted">
<i class="fa fa-trophy "></i>
No badges yet </a>
</li>
<li></li>
<li>
<span class="fd-small muted" title="Member since 08 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
08 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 7 hours ago">
<i class="fa fa-sign-in mr-5"></i>
7 hours ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es-primary btn-sm"><i class="fa fa-check  mr-5"></i> Following</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15136">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15136"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15135">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/shalis"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15135/8b76e1e2bf1335fb1a6d940d3278880d_small.jpg" alt="Visalini S"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/shalis">Visalini S</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/shalis" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/shalis" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/shalis" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 08 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
08 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 8 hours ago">
<i class="fa fa-sign-in mr-5"></i>
8 hours ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15135" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15135">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15135"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15134">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/janicamacaraig"><img src="http://www.stroff.com/media/com_easysocial/avatars/defaults/profiles/1/58f818c1dc6f95727ccd17d7048eeeb4_small.png" alt="Janica Kristine Esguerra Macaraig"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/janicamacaraig">Janica Kristine Esguerra Macaraig</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/janicamacaraig" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/janicamacaraig" class="fd-small muted">
<i class="fa fa-share-alt "></i>
1 Follower </a>
</li>
<li>
<a href="/badges/achievements/janicamacaraig" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 07 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
07 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 10 hours ago">
<i class="fa fa-sign-in mr-5"></i>
10 hours ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es-primary btn-sm"><i class="fa fa-check  mr-5"></i> Following</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15134">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15134"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15133">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15133-lu-huang"><img src="http://www.stroff.com/media/com_easysocial/avatars/defaults/profiles/1/58f818c1dc6f95727ccd17d7048eeeb4_small.png" alt="Lu Huang"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15133-lu-huang">Lu Huang</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15133-lu-huang" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15133-lu-huang" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15133-lu-huang" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=1"><i class="fa mr-5 fa-male"></i>Male</a></li>
<li>
<span class="fd-small muted" title="Member since 07 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
07 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 10 hours ago">
<i class="fa fa-sign-in mr-5"></i>
10 hours ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15133" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15133">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15133"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15132">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15132-tian"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15132/94b7def0097668061bf3a86f0a0f89f1_small.jpg" alt="Tian"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15132-tian">Tian</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15132-tian" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15132-tian" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15132-tian" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 07 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
07 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 17 hours ago">
<i class="fa fa-sign-in mr-5"></i>
17 hours ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15132" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15132">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15132"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15131">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15131-muhamad-sidiq-fanani"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15131/c5011053a62b109d1f6942da51990951_small.jpg" alt="MUHAMAD SIDIQ FANANI"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15131-muhamad-sidiq-fanani">MUHAMAD SIDIQ FANANI</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15131-muhamad-sidiq-fanani" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15131-muhamad-sidiq-fanani" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15131-muhamad-sidiq-fanani" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=1"><i class="fa mr-5 fa-male"></i>Male</a></li>
<li>
<span class="fd-small muted" title="Member since 06 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
06 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 1 day ago">
<i class="fa fa-sign-in mr-5"></i>
1 day ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15131" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15131">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15131"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15130">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15130-annie-tan"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15130/164c651f33d52f61bb75d58f47809e0f_small.jpg" alt="Annie Tan"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15130-annie-tan">Annie Tan</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15130-annie-tan" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15130-annie-tan" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15130-annie-tan" class="fd-small muted">
<i class="fa fa-trophy "></i>
No badges yet </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 06 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
06 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15130" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15130">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15130"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15129">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15129-sim-jia-yi"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15129/41812ecaf69c8fd82cdaa837bb4515fc_small.jpg" alt="Sim Jia Yi"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15129-sim-jia-yi">Sim Jia Yi</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15129-sim-jia-yi" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15129-sim-jia-yi" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15129-sim-jia-yi" class="fd-small muted">
<i class="fa fa-trophy "></i>
No badges yet </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 06 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
06 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15129" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15129">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15129"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15128">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15128-paul-crawford"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15128/407413e46d28b1bdc18a0465fb322225_small.jpg" alt="Paul Crawford"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15128-paul-crawford">Paul Crawford</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15128-paul-crawford" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15128-paul-crawford" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15128-paul-crawford" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=1"><i class="fa mr-5 fa-male"></i>Male</a></li>
<li>
<span class="fd-small muted" title="Member since 06 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
06 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15128" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15128">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15128"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15127">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15127-maria-chen"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15127/5e171268e3ddab83fec77169f58db266_small.jpg" alt="Maria Chen"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15127-maria-chen">Maria Chen</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15127-maria-chen" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15127-maria-chen" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15127-maria-chen" class="fd-small muted">
<i class="fa fa-trophy "></i>
No badges yet </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 06 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
06 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15127" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15127">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15127"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15126">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15126-van-thi-thanh-pham"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15126/19d58abdf69558d81fead4458745648e_small.jpg" alt="Van Thi Thanh  Pham"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15126-van-thi-thanh-pham">Van Thi Thanh Pham</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15126-van-thi-thanh-pham" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15126-van-thi-thanh-pham" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15126-van-thi-thanh-pham" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 06 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
06 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15126" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15126">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15126"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15125">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/eriaung"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15125/26981b6777f12f1eaf1420329439318c_small.jpg" alt="Eri Aung"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/eriaung">Eri Aung</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/eriaung" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/eriaung" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/eriaung" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15125" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15125">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15125"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15124">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15124-jenny-goh"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15124/7cd4d83b5254f28e57e5322849bf011a_small.jpg" alt="Jenny Goh"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15124-jenny-goh">Jenny Goh</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15124-jenny-goh" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15124-jenny-goh" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15124-jenny-goh" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15124" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15124">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15124"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15122">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/diane-phammnh"><img src="http://www.stroff.com/media/com_easysocial/avatars/defaults/profiles/1/58f818c1dc6f95727ccd17d7048eeeb4_small.png" alt="Diane Su Pham-Minh"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/diane-phammnh">Diane Su Pham-Minh</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/diane-phammnh" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/diane-phammnh" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/diane-phammnh" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15122" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15122">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15122"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15121">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/cyril88"><img src="http://www.stroff.com/media/com_easysocial/avatars/defaults/profiles/1/58f818c1dc6f95727ccd17d7048eeeb4_small.png" alt="Cyril Ng"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/cyril88">Cyril Ng</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/cyril88" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/cyril88" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/cyril88" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=1"><i class="fa mr-5 fa-male"></i>Male</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15121" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15121">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15121"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15120">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/limyenmae"><img src="http://www.stroff.com/media/com_easysocial/avatars/defaults/profiles/1/58f818c1dc6f95727ccd17d7048eeeb4_small.png" alt="Yen Mae Lim"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/limyenmae">Yen Mae Lim</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/limyenmae" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/limyenmae" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/limyenmae" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15120" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15120">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15120"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15119">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15119-amarnath-ashok"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15119/949a65540c284637f72519823155ca33_small.jpg" alt="Amarnath Ashok"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15119-amarnath-ashok">Amarnath Ashok</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15119-amarnath-ashok" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15119-amarnath-ashok" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15119-amarnath-ashok" class="fd-small muted">
<i class="fa fa-trophy "></i>
No badges yet </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=1"><i class="fa mr-5 fa-male"></i>Male</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15119" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15119">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15119"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15118">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/15118-joey-chia"><img src="http://www.stroff.com/media/com_easysocial/avatars/defaults/profiles/1/58f818c1dc6f95727ccd17d7048eeeb4_small.png" alt="Joey chia"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/15118-joey-chia">Joey chia</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/15118-joey-chia" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/15118-joey-chia" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/15118-joey-chia" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15118" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15118">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15118"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15117">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/vikkram"><img src="http://www.stroff.com/media/com_easysocial/avatars/defaults/profiles/1/58f818c1dc6f95727ccd17d7048eeeb4_small.png" alt="Vikkram ambalaraj"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/vikkram">Vikkram ambalaraj</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/vikkram" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/vikkram" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/vikkram" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=1"><i class="fa mr-5 fa-male"></i>Male</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15117" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15117">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15117"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="space_item" data-users-item data-id="15116">
<div class="item_content rows es-item">
<div class="seach-avatar-wrap pull-left">
<a href="/user-profile/joy"><img src="http://www.stroff.com/media/com_easysocial/avatars/users/15116/64b275ccb23d27fd5d6e0ca718443b56_small.jpg" alt="LOVELY JOY LORETE SALDUA"/></a>
<div class="es-online-status es-online-status-small">
<i data-original-title="User is offline" data-placement="top" data-es-provide="tooltip" class="es-status-off"></i>
</div>
</div>
<div class="search-item-body">
<div class="es-item-title"><a href="/user-profile/joy">LOVELY JOY LORETE SALDUA</a></div>
<div class="search-item-status es-item-detail">
<ul class="fd-reset-list list-inline user-meta">
<li>
<a href="/contacts/joy" class="fd-small muted">
<i class="fa fa-users"></i>
No contacts yet </a>
</li>
<li>
<a href="/followers/joy" class="fd-small muted">
<i class="fa fa-share-alt "></i>
No followers yet </a>
</li>
<li>
<a href="/badges/achievements/joy" class="fd-small muted">
<i class="fa fa-trophy "></i>
1 Badge </a>
</li>
<li><a class="fd-small muted" href="/search/advanced?criterias[0]=GENDER|gender&amp;operators[0]=equal&amp;conditions[0]=2"><i class="fa mr-5 fa-female"></i>Female</a></li>
<li>
<span class="fd-small muted" title="Member since 05 Aug 2016">
<i class="fa fa-file-text-o mr-5"></i>
05 Aug 2016 </span>
</li>
<li>
<span class="fd-small muted" title="Last logged in 2 days ago">
<i class="fa fa-sign-in mr-5"></i>
2 days ago </span>
</li>
</ul>
</div>  
<div class="users-actions">
<span class="mr-5">
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-followers-follow data-es-followers-id="15116" data-es-show-popbox="false">
<i class="fa fa-share-alt  mr-5"></i> Follow User</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-users-add-friend data-id="15116">
<i class="fa fa-user-plus  mr-5"></i> Add As Contact</a>
</span>
<span>
<a href="javascript:void(0);" class="btn btn-es btn-sm" data-es-conversations-compose data-es-conversations-id="15116"><i class="fa fa-envelope  mr-5"></i> Message</a>
</span>
</div>
</div>
</div>
</div>
<div class="rows">
<div class="pagination">
<ul><li class="pagination-start"><span class="pagenav">Start</span></li><li class="pagination-prev"><span class="pagenav">Prev</span></li><li><span class="pagenav">1</span></li><li><a href="/jobseekers-search?start=20" class="pagenav">2</a></li><li><a href="/jobseekers-search?start=40" class="pagenav">3</a></li><li><a href="/jobseekers-search?start=60" class="pagenav">4</a></li><li><a href="/jobseekers-search?start=80" class="pagenav">5</a></li><li><a href="/jobseekers-search?start=100" class="pagenav">6</a></li><li><a href="/jobseekers-search?start=120" class="pagenav">7</a></li><li><a href="/jobseekers-search?start=140" class="pagenav">8</a></li><li><a href="/jobseekers-search?start=160" class="pagenav">9</a></li><li><a href="/jobseekers-search?start=180" class="pagenav">10</a></li><li class="pagination-next"><a title="Next" href="/jobseekers-search?start=20" class="hasTooltip pagenav">Next</a></li><li class="pagination-end"><a title="End" href="/jobseekers-search?start=12620" class="hasTooltip pagenav">End</a></li></ul>
<div class="clrfix"></div>
</div>
<div class="pagination_counter">Page 1 of 632 </div>
</div>
</div>
</div>
</div>
<script src="http://www.stroff.com/components/com_employers/assets/js/search/search.js"></script>
<script>

EasySocial.require()
.script( 'site/users/users' )
.done(function($)
{
	$( '[data-users]' ).implement( EasySocial.Controller.Users );
});

</script>
</main>
  </div>
</div>
</div>
</div>
</section>
 
<footer id="footerwrap" class="wrap zen-footer stack-tablets stack-phones" role="contentinfo">
<section class="zen-copyright">
<div class="zen-container">
<div class="zen-row">
<div class="zen-spotlight">
<div id="footer" class="zg-col zg-col-12">
<div class="moduletable ">
<div class="module-inner">
<div class="zen-module-body">
<ul class="zen-menu-87 ">
<li class="item-164"><a href="/about-us">
About Us </a> </li><li class="item-1151"><a href="/articles">
Articles </a> </li><li class="item-165"><a href="/sitemap">
Sitemap </a> </li><li class="item-166"><a href="/terms-of-use">
Terms of Use </a> </li><li class="item-167"><a href="/privacy-policy">
Privacy Policy </a> </li><li class="item-168"><a href="/contact-us">
Contact Us </a> </li></ul>
 
<script>
		jQuery.noConflict(); 
		(function($) {	
			$(document).ready(function(){			
				if($('ul.zen-menu-89').length){
					$('ul.zen-menu-89 li').each(function(){
						
						if($(this).children('a').text().indexOf("MY RESUME")!=-1){
							
							$(this).children('a').attr('href','/user-profile/701-job-seeker');
						}
						if($(this).children('a').text().indexOf("JOB PREFERENCES")!=-1){
							
							$(this).children('a').attr('href','/user-profile/701-job-seeker/about/3');
						}
					});
				}
			});			
		}) (jQuery);

	</script> </div>
</div>
</div>
</div>
</div>
</div> </div>
</section>
</footer>
 
</div>
<div class="social-wrap fixed">
</div>
<script>
		jQuery(document).ready(function ($) {
					
			$('.popup').live( 'click', function(){
				newwindow=window.open($(this).attr('href'),'','height=200,width=450');
			    if (window.focus) {newwindow.focus()}
			    return false;
			 });
		});
	</script>
<div id="zen-panel" class="zen-panel" data-id="zen-panel-1">
<a class="zen-panel-close" href="#"><span class="fa fa-remove zen-icon-remove zen-icon"></span></a>
<div class="moduletable ">
<div class="module-inner">
<div class="zen-module-body">
<div class="custom">
<p><span style="font-size: 12pt;"><strong>"Build Your Career Success with Stroff!"</strong></span></p>
<p>&nbsp;</p>
<p><strong>STROFF</strong> (<a href="http://www.stroff.com">http://www.stroff.com</a>) started with the simple realization that&nbsp;<strong>Everyone can Fly</strong>! --- that Each One of us can achieve our Career Aspirations and Success in life.</p>
<p>&nbsp;</p>
<p>We just need the RIGHT Connections and the RIGHT Career Guidance.&nbsp;</p>
<p>&nbsp;</p>
<p>Stroff is therefore a cutting-edge "Career Capital" development portal to parashute you immediately to SUCCESS with the following CONNECTIONS:-</p>
<p>&nbsp;</p>
<p><strong>(a) Connect to PEOPLE</strong></p>
<p>Stroff is a platform for you to widen your personal and professional networks. Connect with friends, colleagues, fellow professionals, recruiters, influencers, industry experts, academics, students and even mentors whom you look up to.&nbsp;</p>
<p>&nbsp;</p>
<p><strong>(b) Connect to INDUSTRY/COMPANIES</strong></p>
<p>Connect to companies of all industries and sizes, stay updated with happenings and job openings of each company, and keep up to date with the latest industry trends. Let companies find you through your Stroff profile and indicated job preferences. Your friends can refer you to companies they know or have worked for.</p>
<p>&nbsp;</p>
<p><strong>(c) Connect to RESOURCES</strong></p>
<p>Gain access to exciting networking events, career guidance and development materials and courses. You will also obtain invaluable insights and knowledge, participate in informative subject-matter communities and engage in knowledge sharing discussions and online meetups.&nbsp;</p>
<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; direction: ltr; unicode-bidi: embed;">&nbsp;</p>
<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; direction: ltr; unicode-bidi: embed;"><strong>(d) Connect to JOBS</strong></p>
<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; direction: ltr; unicode-bidi: embed;">Whilst companies/recruiters can find you, you can also find jobs on Stroff. We have a strong offering of job opportunities ranging from full-time, graduate, internships, part-time, temp/ad hoc, contract and freelance openings. These positions are spread over a wide spectrum of employers, from renowned MNCs, foreign companies, government, Singapore household brands, SMEs, startups, NGOs and non-profit organisations.</p>
<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; direction: ltr; unicode-bidi: embed;">&nbsp;</p>
<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; direction: ltr; unicode-bidi: embed;"><strong>(e) Connect to SUBJECT MATTER COMMUNITIES</strong></p>
<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; direction: ltr; unicode-bidi: embed;">Engage with like-minded friends and enthusiasts and participate actively in our Subject Matter Communities, the first of which is the "Soft Skills" community.</p>
<p style="margin-top: 0pt; margin-bottom: 0pt; direction: ltr; unicode-bidi: embed;">&nbsp;</p>
<p>Stroff has over <strong>10,000+ candidate</strong> profiles and over <strong>1000+ companies</strong> in our database. To date, we have helped countless students and young working adults find Internships, Part Time Jobs, Fresh Graduate, Full Time, Contract, Temp/Ad Hoc and Freelance Roles.</p>
<p>&nbsp;</p>
<p>We are excited to partner with you and embark on this marvelous Career Building journey together! To Your SUCCESS!&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Yours sincerely,</p>
<p>&nbsp;</p>
<p>The Stroff Team</p>
<p>Stroff Pte. Ltd.</p>
<p>(UIN: 201214956N)</p>
<p>W: <a href="http://www.stroff.com">http://www.stroff.com</a></p>
<p>E: <a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="1b686f69747d7d5b686f69747d7d35787476">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>&nbsp;</p></div>
</div>
</div>
</div>
</div>
<a class="open-panel" data-target="zen-panel-1" href="#">
Intro</a>
<div id="zen-overlay"></div>
<script>
jQuery(document).ready(function($){
	
	$('.open-panel').click(function() {
		
		var target = $(this).attr('data-target');
		
		$('[data-id="' + target +'"]').fadeToggle();
		$('#zen-overlay').fadeToggle();
		
		$("html, body").animate({ scrollTop: 0 }, "slow");
		 
		return false;
	});
	
	$('#zen-overlay').click(function() {
		$(this).fadeOut();
		$('.zen-panel').fadeOut();
		return false;
	});
	
	
	$('.zen-panel-close').click(function() {
		$('#zen-overlay,.zen-panel').fadeOut();
		return false;
	});
});
</script>
<script>
		jQuery(document).ready(function($){
			$("img").not(".none").lazyload({
				effect : "fadeIn"
		});
	});
	</script>
<div id="toTop">  <a id="toTopLink"><span class="fa fa-arrow-up zen-icon zen-icon-arrow-up"></span><span id="toTopText"> Back to top</span></a></div>
<script>
	jQuery(document).ready(function($){
			
			$(window).scroll(function () {
			
				if ($(this).scrollTop() >200) {
				 	$("#toTop").fadeIn();
				}
				else {
				 	$("#toTop").fadeOut();
				}
			});
		
			$("#toTop").click(function() {
				$("html, body").animate({ scrollTop: 0 }, "slow");
				 return false;
			});
	});
</script>
<script>
jQuery(document).ready(function($){
	
	
	$('.sidebar').zenaccordion({
	
		  		 openfirst: true,
  		   		 type:"panel"
 	});
 	

});
</script>
<script>
jQuery(document).ready(function($){
	
	var win      = $(window),
	    fxel     = $('#navwrap'),
	    fill     = $('#sticky-fill'),
	    navheight = $('#menu').height(),
	    eloffset = fxel.offset().top;
	 
	    $(fill).height(navheight);

	win.scroll(function() {
	    if (eloffset < win.scrollTop()) {
	        fxel.addClass("fixed");
	        $('html').addClass("fixed");
	        $(fill).addClass('visible').removeClass('hidden');
	    } else {
	        fxel.removeClass("fixed");
	        $('html').removeClass("fixed");
	        $(fill).removeClass('visible').addClass('hidden');
	    }
	});
});
</script>
<script>
		jQuery(document).ready(function ($) {
		   	$('#navwrap nav').meanmenu({
		   				   		meanScreenWidth: '1050' 
		   	});
		});
	</script>
 
<div style="display: none;">
<div id="HTML5Audio" style="display: none;">
<input id="audiofile" type="text" value="" style="display: none;"/>
</div>
<audio id="myaudio" src="http://www.stroff.com/media/com_jbolo/sounds/sample.wav" style="display: none;">
<span id="OldSound"></span>
<input type="button" value="Play Sound" onClick="LegacyPlaySound('LegacySound')">
</audio>
</div>
<button class="listopener" id="listopener">
<div></div>
<span id="onlineusers">Chat</span>
</button>
<div id="jbolouserlist_container" class="jbolouserlist_container">
<div id="jbolouserlist" class="jbolouserlist"></div>
</div>  
<div class="jbolochatwin" id="jbolochatwin" style="display:none">
</div> 
</body>
</html>