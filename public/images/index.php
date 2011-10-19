//===============================
// Kayako LiveResponse
// Copyright (c) 2001-2011

// http://www.kayako.com
// License: http://www.kayako.com/license.txt
//===============================

var sessionid_w1s78gc0 = "m9mjkoofs1ijxrnhide9quqoq76j9xtr";
var geoip_w1s78gc0 = new Array();

var hasnotes_w1s78gc0 = "0";
var isnewsession_w1s78gc0 = "1";
var repeatvisit_w1s78gc0 = "1";
var lastvisittimeline_w1s78gc0 = "0";
var lastchattimeline_w1s78gc0 = "0";
var isfirsttime_w1s78gc0 = 1;
var timer_w1s78gc0 = 0;
var imagefetch_w1s78gc0 = 19;
var updateurl_w1s78gc0 = "";
var screenHeight = window.screen.availHeight;
var screenWidth = window.screen.availWidth;
var colorDepth = window.screen.colorDepth;
var timeNow = new Date();
var referrer = escape(document.referrer);
var windows, mac, linux;
var ie, op, moz, misc, browsercode, browsername, browserversion, operatingsys;
var dom, ienew, ie4, ie5, ie6, ie7, ie8, moz_rv, moz_rv_sub, ie5mac, ie5xwin, opnu, op4, op5, op6, op7, op8, op9, op10, saf, konq, chrome, ch1, ch2, ch3;
var appName, appVersion, userAgent;
var appname = navigator.appName;
var appVersion = navigator.appVersion;
var userAgent = navigator.userAgent;
var dombrowser = "default";
var isChatRunning_w1s78gc0 = 0;
var title = document.title;
var proactiveImageUse_w1s78gc0 = new Image();
windows = (appVersion.indexOf('Win') != -1);
mac = (appVersion.indexOf('Mac') != -1);
linux = (appVersion.indexOf('Linux') != -1);
if (!document.layers) {
	dom = (document.getElementById ) ? document.getElementById : false;
} else {
	dom = false;
}
var myWidth = 0, myHeight = 0;
if( typeof( window.innerWidth ) == 'number' ) {
	//Non-IE
	myWidth = window.innerWidth;
	myHeight = window.innerHeight;
} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
	//IE 6+ in 'standards compliant mode'
	myWidth = document.documentElement.clientWidth;
	myHeight = document.documentElement.clientHeight;
} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
	//IE 4 compatible
	myWidth = document.body.clientWidth;
	myHeight = document.body.clientHeight;
}
winH = myHeight;
winW = myWidth;
misc=(appVersion.substring(0,1) < 4);
op=(userAgent.indexOf('Opera') != -1);
moz=(userAgent.indexOf('Gecko') != -1);
chrome=(userAgent.indexOf('Chrome') != -1);
if (document.all) {
	ie=(document.all && !op);
}
saf=(userAgent.indexOf('Safari') != -1);
konq=(userAgent.indexOf('Konqueror') != -1);

if (op) {
	op_pos = userAgent.indexOf('Opera');
	opnu = userAgent.substr((op_pos+6),4);
	op5 = (opnu.substring(0,1) == 5);
	op6 = (opnu.substring(0,1) == 6);
	op7 = (opnu.substring(0,1) == 7);
	op8 = (opnu.substring(0,1) == 8);
	op9 = (opnu.substring(0,1) == 9);
	op10 = (opnu.substring(0,2) == 10);
} else if (chrome) {
	chrome_pos = userAgent.indexOf('Chrome');
	chnu = userAgent.substr((chrome_pos+7),4);
	ch1 = (chnu.substring(0,1) == 1);
	ch2 = (chnu.substring(0,1) == 2);
	ch3 = (chnu.substring(0,1) == 3);
} else if (moz){
	rv_pos = userAgent.indexOf('rv');
	moz_rv = userAgent.substr((rv_pos+3),3);
	moz_rv_sub = userAgent.substr((rv_pos+7),1);
	if (moz_rv_sub == ' ' || isNaN(moz_rv_sub)) {
		moz_rv_sub='';
	}
	moz_rv = moz_rv + moz_rv_sub;
} else if (ie){
	ie_pos = userAgent.indexOf('MSIE');
	ienu = userAgent.substr((ie_pos+5),3);
	ie4 = (!dom);
	ie5 = (ienu.substring(0,1) == 5);
	ie6 = (ienu.substring(0,1) == 6);
	ie7 = (ienu.substring(0,1) == 7);
	ie8 = (ienu.substring(0,1) == 8);
}

if (konq) {
	browsercode = "KO";
	browserversion = appVersion;
	browsername = "Konqueror";
} else if (chrome) {
	browsercode = "CH";
	if (ch1) {
		browserversion = "1";
	} else if (ch2) {
		browserversion = "2";
	} else if (ch3) {
		browserversion = "3";
	}

	browsername = "Google Chrome";
} else if (saf) {
	browsercode = "SF";
	browserversion = appVersion;
	browsername = "Safari";
} else if (op) {
	browsercode = "OP";
	if (op5) {
		browserversion = "5";
	} else if (op6) {
		browserversion = "6";
	} else if (op7) {
		browserversion = "7";
	} else if (op8) {
		browserversion = "8";
	} else if (op9) {
		browserversion = "9";
	} else if (op10) {
		browserversion = "10";
	} else {
		browserversion = appVersion;
	}
	browsername = "Opera";
} else if (moz) {
	browsercode = "MO";
	browserversion = appVersion;
	browsername = "Firefox";
} else if (ie) {
	browsercode = "IE";
	if (ie4) {
		browserversion = "4";
	} else if (ie5) {
		browserversion = "5";
	} else if (ie6) {
		browserversion = "6";
	} else if (ie7) {
		browserversion = "7";
	} else if (ie8) {
		browserversion = "8";
	} else {
		browserversion = appVersion;
	}
	browsername = "Internet Explorer";
}

if (windows) {
	operatingsys = "Windows";
} else if (linux) {
	operatingsys = "Linux";
} else if (mac) {
	operatingsys = "Mac";
} else {
	operatingsys = "Unkown";
}

if (document.getElementById)
{
	dombrowser = "default";
} else if (document.layers) {
	dombrowser = "NS4";
} else if (document.all) {
	dombrowser = "IE4";
}

var proactiveX = 20;
var proactiveXStep = 1;
var proactiveDelayTime = 100;

var proactiveY = 0;
var proactiveOffsetHeight=0;
var proactiveYStep = 0;
var proactiveAnimate = false;

function browserObject_w1s78gc0(objid)
{
	if (dombrowser == "default")
	{
		return document.getElementById(objid);
	} else if (dombrowser == "NS4") {
		return document.layers[objid];
	} else if (dombrowser == "IE4") {
		return document.all[objid];
	}
}

function doRand_w1s78gc0()
{
	var num;
	now=new Date();
	num=(now.getSeconds());
	num=num+1;
	return num;
}

function getCookie_w1s78gc0(name) {
	var crumb = document.cookie;
	var index = crumb.indexOf(name + "=");
	if (index == -1) return null;
	index = crumb.indexOf("=", index) + 1;
	var endstr = crumb.indexOf(";", index);
	if (endstr == -1) endstr = crumb.length;
	return unescape(crumb.substring(index, endstr));
}

function deleteCookie_w1s78gc0(name) {
	var expiry = new Date();
	document.cookie = name + "=" + "; expires=Thu, 01-Jan-70 00:00:01 GMT" +  "; path=/";
}

function elapsedTime_w1s78gc0()
{
	if (typeof _elapsedTimeStatusIndicator == 'undefined') {
		_elapsedTimeStatusIndicator = 'w1s78gc0';
	} else if (typeof _elapsedTimeStatusIndicator == 'string' && _elapsedTimeStatusIndicator != 'w1s78gc0') {

		return;
	}


	if (timer_w1s78gc0 < 3600)
	{
		timer_w1s78gc0++;
		imagefetch_w1s78gc0++;

		if (imagefetch_w1s78gc0 > 19) {
			imagefetch_w1s78gc0 = 0;
			doStatusLoop_w1s78gc0();
		}

		setTimeout("elapsedTime_w1s78gc0();", 1000);
	}
}

function doStatusLoop_w1s78gc0() {
	date1 = new Date();
	var _newPageTitleReg=/[^0-9,a-z,A-Z]/gi;
	var _finalPageTitle=title.replace(_newPageTitleReg, " ");

	updateurl_w1s78gc0 = "https://secure.vexxhost.com/support/visitor/index.php?/LiveChat/VisitorUpdate/UpdateFootprint/_time="+date1.getTime()+"/_randomNumber="+doRand_w1s78gc0()+"/_url="+encodeURIComponent(window.location)+"/_isFirstTime="+encodeURIComponent(isfirsttime_w1s78gc0)+"/_sessionID="+encodeURIComponent(sessionid_w1s78gc0)+"/_referrer="+encodeURIComponent(document.referrer)+"/_resolution="+encodeURIComponent(screenWidth+"x"+screenHeight)+"/_colorDepth="+encodeURIComponent(colorDepth)+"/_platform="+encodeURIComponent(navigator.platform)+"/_appVersion="+encodeURIComponent(navigator.appVersion)+"/_appName="+encodeURIComponent(navigator.appName)+"/_browserCode="+encodeURIComponent(browsercode)+"/_browserVersion="+encodeURIComponent(browserversion)+"/_browserName="+encodeURIComponent(browsername)+"/_operatingSys="+encodeURIComponent(operatingsys)+"/_pageTitle="+encodeURIComponent(_finalPageTitle)+"/_hasNotes="+encodeURIComponent(hasnotes_w1s78gc0)+"/_repeatVisit="+encodeURIComponent(repeatvisit_w1s78gc0)+"/_lastVisitTimeline="+encodeURIComponent(lastvisittimeline_w1s78gc0)+"/_lastChatTimeline="+encodeURIComponent(lastchattimeline_w1s78gc0)+"/_isNewSession="+encodeURIComponent(isnewsession_w1s78gc0);

	proactiveImageUse_w1s78gc0 = new Image();
	proactiveImageUse_w1s78gc0.onload = imageLoaded_w1s78gc0;
	proactiveImageUse_w1s78gc0.src = updateurl_w1s78gc0;

	isfirsttime_w1s78gc0 = 0;
}

function startChat_w1s78gc0(proactive)
{
	isChatRunning_w1s78gc0 = 1;

	docWidth = (winW-599)/2;
	docHeight = (winH-679)/2;

		_chatWindowURL = 'https://secure.vexxhost.com/support/visitor/index.php?/LiveChat/Chat/StartInline/_sessionID=m9mjkoofs1ijxrnhide9quqoq76j9xtr/_proactive=0/_filterDepartmentID=4%2C2%2C3/_fullName=/_email=/_inline=0/';
	


	chatwindow = window.open(_chatWindowURL,"customerchat"+doRand_w1s78gc0(), "toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=yes,resizable=1,width=599,height=679,left="+docWidth+",top="+docHeight);

	hideProactiveChatData_w1s78gc0();
}

function imageLoaded_w1s78gc0() {
	if (!proactiveImageUse_w1s78gc0)
	{
		return;
	}
	proactiveAction = proactiveImageUse_w1s78gc0.width;

	if (proactiveAction == 3)
	{
		doProactiveInline_w1s78gc0();
	} else if (proactiveAction == 4) {
		displayProactiveChatData_w1s78gc0();
	}
}

function writeInlineRequestData_w1s78gc0()
{
	docWidth = (winW-600)/2;
	docHeight = (winH-680)/2;

	var divData = '';
	divData += "<div style=\"FLOAT: left; WIDTH: 600px; BACKGROUND: #FFFFFF; BORDER: SOLID 1px #bcb5a6;\"><iframe width=\"600\" height=\"680\" scrolling=\"auto\" frameborder=\"0\" src=\"\" name=\"inlinechatframe\" id=\"inlinechatframe\">ERROR: No IFRAME Support Detected</iframe></div><div style=\"FLOAT: left; MARGIN-LEFT: -8px; MARGIN-TOP: -8px;\"><a href=\"javascript: closeInlineProactiveRequest_w1s78gc0();\"><img src=\"https://secure.vexxhost.com/support/__swift/themes/client_default/images/icon_close.png\" border=\"0\" align=\"absmiddle\" /></a></div>";


	var inlineChatElement = document.createElement("div");
	inlineChatElement.style.position = 'absolute';
	inlineChatElement.style.display = 'none';
	inlineChatElement.style.float = 'left';
	inlineChatElement.style.top = docHeight+'px';
	inlineChatElement.style.left = docWidth+'px';
	inlineChatElement.style.zIndex = 500;

	if (inlineChatElement.style.overflow) {
		inlineChatElement.style.overflow = 'none';
	}

	inlineChatElement.id = 'inlinechatdiv';
	inlineChatElement.innerHTML = divData;

	var proactiveChatContainer = document.getElementById('proactivechatcontainer' + swiftuniqueid);
	proactiveChatContainer.appendChild(inlineChatElement);
}

function writeProactiveRequestData_w1s78gc0()
{
	docWidth = (winW-450)/2;
	docHeight = (winH-400)/2;

	var divData = '';
	divData += "<div style=\"FLOAT: left; WIDTH: 500px; BACKGROUND: #FFFFFF url(https://secure.vexxhost.com/support/__swift/themes/client_default/images/mainbackground.gif) REPEAT; BORDER: SOLID 1px #bcb5a6;\"><div style=\"BACKGROUND: #FFFFFF url(https://secure.vexxhost.com/support/__swift/themes/client_default/images/icon_proactiveuserbackground.gif) NO-REPEAT bottom left; BORDER: SOLID 1px #bcb5a6; MARGIN: 8px;\"><div style=\"TEXT-ALIGN: center;\"><img src=\"https://secure.vexxhost.com/support/__swift/themes/client_default/images/fusion.gif\" border=\"0\" align=\"absmiddle\" /></div><HR align=\"center\" style=\"WIDTH: 80%; BORDER: none; COLOR: #bcb5a6; BACKGROUND-COLOR: #bcb5a6; HEIGHT: 1px; MARGIN-TOP: 10px; MARGIN-BOTTOM: 3px;\" /><div style=\"PADDING-LEFT: 120px; TEXT-ALIGN: left; MARGIN-TOP: 30px; HEIGHT: 80px; FONT: 45px Trebuchet MS, Georgia, Verdana, Arial, Helvetica; COLOR: #333333;\">Can I help you?</div><div style=\"PADDING-LEFT: 120px; VERTICAL-ALIGN: top; MARGIN-TOP: 0px; PADDING-TOP: 0px; HEIGHT: 200px; FONT: 18pt Trebuchet MS, Georgia, Verdana, Arial, Helvetica; COLOR: #776849;\">Our agents are ready to assist you. Click &quot;Chat Now&quot; to be connected to one instantly.<br /><div style=\"PADDING-TOP: 30px; PADDING-LEFT: 80px; TEXT-ALIGN: center;\"><div style=\"BORDER: SOLID 0 #FFFFFF; TEXT-ALIGN: center; BACKGROUND: URL(https://secure.vexxhost.com/support/__swift/themes/client_default/images/proactivebutton.gif) no-repeat; HEIGHT: 37px; WIDTH: 135px; COLOR: #000000; FONT-WEIGHT: bold; FONT-FAMILY: Trebuchet MS, Georgia, Helvetica, Verdana, Tahoma; FONT-SIZE: 16px; MARGIN: 0px; PADDING-TOP: 6px; PADDING-BOTTOM: 15px; VERTICAL-ALIGN: middle; CURSOR: pointer;\" onmouseover=\"this.style.color=\'red\';\" onmouseout=\"this.style.color=\'#000000\'\" onclick=\"javascript:doProactiveRequest_w1s78gc0();\">Chat Now</div></div></div></div></div><div style=\"FLOAT: left; MARGIN-LEFT: -8px; MARGIN-TOP: -8px;\"><a href=\"javascript:closeProactiveRequest_w1s78gc0();\"><img src=\"https://secure.vexxhost.com/support/__swift/themes/client_default/images/icon_close.png\" border=\"0\" align=\"absmiddle\" /></a></div>";


	var proactiveElement = document.createElement("div");
	proactiveElement.style.position = 'absolute';
	proactiveElement.style.display = 'none';
	proactiveElement.style.float = 'left';
	proactiveElement.style.top = docHeight+'px';
	proactiveElement.style.left = docWidth+'px';
	proactiveElement.style.zIndex = 500;

	if (proactiveElement.style.overflow) {
		proactiveElement.style.overflow = 'none';
	}

	proactiveElement.id = 'proactivechatdiv';
	proactiveElement.innerHTML = divData;

	var proactiveChatContainer = document.getElementById('proactivechatcontainer' + swiftuniqueid);
	proactiveChatContainer.appendChild(proactiveElement);
}

function displayProactiveChatData_w1s78gc0()
{
	if (proactiveAnimate == true) {
		return false;
	}

	writeObj = browserObject_w1s78gc0("proactivechatdiv");
	if (writeObj)
	{
		docWidth = (winW-450)/2;
		docHeight = (winH-400)/2;
		proactiveY = docHeight;
		writeObj.top = docWidth;
		writeObj.left = docHeight;
		proactiveAnimate = true;
	}

	showDisplay_w1s78gc0("proactivechatdiv");

		animateProactiveDiv_w1s78gc0();
	
}

function displayInlineChatData_w1s78gc0()
{
	writeObj = browserObject_w1s78gc0("inlinechatdiv");
	if (writeObj)
	{
		docWidth = (winW-600)/2;
		docHeight = (winH-680)/2;
		proactiveY = docHeight;
		writeObj.top = docHeight;
		writeObj.left = docWidth;

		acceptProactive = new Image();
		acceptProactive.src = "https://secure.vexxhost.com/support/visitor/index.php?/LiveChat/VisitorUpdate/AcceptProactive/_randomNumber="+doRand_w1s78gc0()+"/_sessionID="+sessionid_w1s78gc0;

		inlineChatFrameObj = browserObject_w1s78gc0("inlinechatframe");
		_iframeURL = 'https://secure.vexxhost.com/support/visitor/index.php?/LiveChat/Chat/StartInline/_sessionID=m9mjkoofs1ijxrnhide9quqoq76j9xtr/_proactive=1/_filterDepartmentID=4%2C2%2C3/_fullName=/_email=/_inline=1/';
		if (inlineChatFrameObj && inlineChatFrameObj.src != _iframeURL && writeObj.style.display == 'none') {
			inlineChatFrameObj.src = _iframeURL;
		}
	}

	showDisplay_w1s78gc0("inlinechatdiv");
}

function hideProactiveChatData_w1s78gc0()
{
	hideDisplay_w1s78gc0("proactivechatdiv");
	hideDisplay_w1s78gc0("inlinechatdiv");
}

function doProactiveInline_w1s78gc0()
{
	displayInlineChatData_w1s78gc0();
}

function doProactiveRequest_w1s78gc0()
{
	acceptProactive = new Image();
	acceptProactive.src = "https://secure.vexxhost.com/support/visitor/index.php?/LiveChat/VisitorUpdate/AcceptProactive/_randomNumber="+doRand_w1s78gc0()+"/_sessionID="+sessionid_w1s78gc0;

	startChat_w1s78gc0("4");
}

function closeProactiveRequest_w1s78gc0()
{
	rejectProactive = new Image();
	date1 = new Date();
	proactiveAnimate = false;
	rejectProactive.src = "https://secure.vexxhost.com/support/visitor/index.php?/LiveChat/VisitorUpdate/ResetProactive/_time="+date1.getTime()+"/_randomNumber="+doRand_w1s78gc0()+"/_sessionID="+sessionid_w1s78gc0;

	hideProactiveChatData_w1s78gc0();
}

function closeInlineProactiveRequest_w1s78gc0()
{
	rejectProactive = new Image();
	date1 = new Date();
	rejectProactive.src = "https://secure.vexxhost.com/support/visitor/index.php?/LiveChat/VisitorUpdate/ResetProactive/_time="+date1.getTime()+"/_randomNumber="+doRand_w1s78gc0()+"/_sessionID="+sessionid_w1s78gc0;
	var bodyElement = document.getElementsByTagName('body');

	document.getElementById('inlinechatframe').contentWindow.CloseProactiveChat();
//	window.frames.inlinechatframe.CloseProactiveChat();

	if (bodyElement[0])
	{
		var inlineDivElement = browserObject_w1s78gc0('inlinechatdiv');
		if (inlineDivElement) {
			var _parentNode = inlineDivElement.parentNode;
			_parentNode.removeChild(inlineDivElement);
		}
	}
}

function switchDisplay_w1s78gc0(objid)
{
	result = browserObject_w1s78gc0(objid);
	if (!result)
	{
		return;
	}

	if (result.style.display == "none")
	{
		result.style.display = "block";
	} else {
		result.style.display = "none";
	}
}

function hideDisplay_w1s78gc0(objid)
{
	result = browserObject_w1s78gc0(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "none";
}

function showDisplay_w1s78gc0(objid)
{
	result = browserObject_w1s78gc0(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "block";
}

function updateProactivePosition_w1s78gc0()
{
	writeObj = browserObject_w1s78gc0("proactivechatdiv");
	writeObjInline = browserObject_w1s78gc0("inlinechatdiv");

	docHeight = (winH-412)/2;
	docHeightInline = (winH-680)/2;

	finalTopValue = docHeight + document.body.scrollTop;
	if (finalTopValue < 0) {
		finalTopValue = 10;
	}

	finalTopValueInline = docHeightInline + document.body.scrollTop;
	if (finalTopValueInline < 0) {
		finalTopValueInline = 10;
	}

	if (writeObj) {
		writeObj.style.top = finalTopValue + "px";
	}

	if (writeObjInline) {
		writeObjInline.style.top = finalTopValueInline + "px";
	}
}

function animateProactiveDiv_w1s78gc0()
{
	writeObj = browserObject_w1s78gc0("proactivechatdiv");

	if (!writeObj) {
		return false;
	}

	if(proactiveYStep == 0){proactiveY = proactiveY-proactiveXStep;} else {proactiveY = proactiveY+proactiveXStep;}

	proactiveOffsetHeight = writeObj.offsetHeight;
	if(proactiveY < 0){proactiveYStep = 1; proactiveY=0; }
	if(proactiveY >= (myHeight - proactiveOffsetHeight)){proactiveYStep=0; proactiveY=(myHeight-proactiveOffsetHeight);}

	finalTopValue = proactiveY+document.body.scrollTop;
	if (finalTopValue < 0) {
		finalTopValue = 10;
	}

	writeObj.style.top = finalTopValue+"px";

	if (proactiveAnimate) {
		setTimeout('animateProactiveDiv_w1s78gc0()', proactiveDelayTime);
	}
}

writeProactiveRequestData_w1s78gc0(); writeInlineRequestData_w1s78gc0(); elapsedTime_w1s78gc0();

var oldEvtScroll = window.onscroll; window.onscroll = function() { if (oldEvtScroll) { updateProactivePosition_w1s78gc0(); } }

var swifttagdiv=document.createElement("div");swifttagdiv.innerHTML = "<style type=\"text/css\">#kayako_sitebadgebg:hover {	background-color: #5faf5f !important;}#kayako_sitebadgebg {	background-color: #198c19;	border-color: #5faf5f #126212 #126212 #126212 !important;}</style><div id=\"kayako_sitebadgecontainer\" title=\"Click Here for Live Chat\" onclick=\"javascript: startChat_w1s78gc0(\'0\');\" style=\"background: transparent none repeat scroll 0 0; bottom: 0; cursor:pointer; height: 101px; left: 0; line-height: normal; margin: 0; padding: 0; position: fixed; top: 35% !important; z-index: 4000000000 !important;\">	<div id=\"kayako_sitebadgeholder\">		<div id=\"kayako_sitebadgeindicator\" style=\"background: transparent url(https://secure.vexxhost.com/support/__swift/themes/client_default/images/icon_badge_green.png) no-repeat scroll 0 0; width: 30px; height: 30px; line-height: normal; margin: 0; padding: 0; position: absolute; left: 10px; top: -8px; z-index: 20000;\"></div>		<div id=\"kayako_sitebadgebg\" id=\"kayako_sitebadgebg\" style=\"background-color: #198c19; border-color: #5faf5f #126212 #126212 #126212 !important; background-image: url(https://secure.vexxhost.com/support/__swift/themes/client_default/images/badge_livehelp_en_white.png); background-position: 1px 8px; background-repeat: no-repeat; -moz-border-radius: 0 1em 1em 0 !important; border-radius: 0 1em 1em 0 !important; -webkit-border-radius: 0 1em 1em 0 !important; border-style: outset outset outset none !important; border-width: 1px 1px 1px medium !important; height: 101px !important; left: 0 !important; margin: 0 !important; opacity: 0.90 !important; padding: 0 !important; position: absolute !important; top: 0 !important; width: 30px !important; z-index: 19999 !important;\"></div>	</div></div>";document.getElementById("swifttagdatacontainerrr5tzkox1a").appendChild(swifttagdiv);