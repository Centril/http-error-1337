<?php
/**
 * Intermediate page btw IE users
 *
 * Warning page for IE users...
 * Asks them to switch browser to something
 * better (e.g: Firefox/Opera/etc)
 *
 * The IE user can "insist" on using IE by clicking
 * the "insist" link...
 *
 * HTTP GET variables are easy to spoof
 * but the main goal is to make tech-illiterates
 * swtich browser from IE to something better...
 *
 * @author Mazdak Farrokhzad <twingoow@gmail.com>
 * @subpackage IE
 * @category IE
 * @version 1.0.0
 */

session_start();

if(isset($_GET['insist']))
{
	$_SESSION['IE_INSIST'] = true;
	header('Location: /');
	die;
}
else
{
	unset($_SESSION['IE_INSIST']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>iShare :: HTTP 1337 Crappy Browser</title>
	<style type="text/css">
	*{margin:auto;padding:0;font-family:Arial, Trebuchet MS, sans-serif;font-size:13px;color:#000;}
	a{text-decoration:none;}
	a img{border:0;}
	#wrapper{margin:auto;width:400px;margin-top:20px;}
	#header{position:relative;border-bottom:1px solid #e6e6e6;}
	#message{margin-left:-4px;font-size:48px;font-weight:bold;}
	#code{position:absolute;bottom:7px;right:0;font-size:18px;}
	#content{margin-top:10px;}
	#suggestions{width:400px;border:0px;margin-top:10px;}
	#suggestions th{text-align:left;}
	#suggestions td span{position:relative;top:-3px;margin-left:5px;}
	#suggestions td img{width:20px;height:20px;}
	#suggestions tr.lynx td span{position:relative;top:3px;margin-left:25px;}
	.emphasis{font-weight:bold;}#real{font-size:1.3em;}
	#disclaimer{margin-top:20px;font-size:9px;text-transform:uppercase;}
	#insist{margin-top:20px;}
	#insist>a{font-size:1.5em; color:#0000ff;}
	#insist>a:hover{text-decoration:underline;}
	</style>
</head>
<body><div id="wrapper">
	<div id="header"><div id="message">Crappy Browser&trade;</div><div id="code">HTTP 1337</div></div>
	<div id="content">
		We're sorry, but you seem to be using some form of "software" which is trying to imitate a browser but <span class="emphasis">failing miserably&trade;</span>.<br />
		Please download and install a <span id="real" class="emphasis">REAL</span> browser, and try again!<br /><br />
		Here are some suggestions:</div>
		<table id="suggestions">
			<tr><th>Windows</th><th>Mac OS X</th><th>Linux</th></tr>
			<tr>
				<td><a href="http://www.mozilla.com" title="Mozilla Firefox for Windows"><img src="firefox.jpg" alt="Firefox" /><span>Firefox</span></a></td>
				<td><a href="http://www.mozilla.com" title="Mozilla Firefox for Mac OS X"><img src="firefox.jpg" alt="Firefox" /><span>Firefox</span></a></td>
				<td><a href="http://www.mozilla.com" title="Mozilla Firefox for Linux"><img src="firefox.jpg" alt="Firefox" /><span>Firefox</span></a></td>
			</tr>
			<tr>
				<td><a href="http://www.opera.com" title="Opera for Windows"><img src="opera.jpg" alt="Opera" /><span>Opera</span></a></td>
				<td><a href="http://www.opera.com" title="Opera for Mac OS X"><img src="opera.jpg" alt="Opera" /><span>Opera</span></a></td>
				<td><a href="http://www.opera.com" title="Opera for Linux"><img src="opera.jpg" alt="Opera" /><span>Opera</span></a></td>
			</tr>
			<tr>
				<td><a href="http://www.apple.com/safari/" title="Apple Safari for Windows"><img src="safari.jpg" alt="Safari" /><span>Safari</span></a></td>
				<td><a href="http://www.apple.com/safari/" title="Apple Safari for Mac OS X"><img src="safari.jpg" alt="Safari" /><span>Safari</span></a></td>
				<td><a href="http://www.twotoasts.de/index.php?/pages/midori_summary.html" title="Midori for Linux"><img src="Midori.jpg" alt="Midori" /><span>Midori</span></a></td>
			</tr>
			<tr><td><a href="http://www.google.com/chrome" title="Google Chrome for Windows"><img src="chrome.jpg" alt="Chrome" /><span>Chrome</span></a></td></tr>
			<tr>
				<td><a href="http://www.konqueror.org" title="Konqueror (KDE) for Windows"><img src="konqueror.jpg" alt="Konqueror" /><span>Konqueror</span></a></td>
				<td><a href="http://www.konqueror.org" title="Konqueror (KDE) for Mac OS X"><img src="konqueror.jpg" alt="Konqueror" /><span>Konqueror</span></a></td>
				<td><a href="http://www.konqueror.org" title="Konqueror (KDE) for Linux"><img src="konqueror.jpg"  alt="Konqueror" /><span>Konqueror</span></a></td>
			</tr>
			<tr class="lynx">
				<td><a href="http://lynx.isc.org" title="Lynx [Text-Based] (Cross-Platform)"><span>Lynx</span></a></td><td><a href="http://lynx.isc.org" title="Lynx [Text-Based] (Cross-Platform)"><span>Lynx</span></a></td>
				<td><a href="http://lynx.isc.org" title="Lynx [Text-Based] (Cross-Platform)"><span>Lynx</span></a></td>
			</tr>
		</table>
	<div id="disclaimer">DISCLAIMER: "Crappy Browser" &amp; "failing miserably" are NOT trademarks of iShare, and as far as we know: they are not trademarks</div>
	<div id="insist"><a href="?insist" title="I REALLY don't want to install a new browser">No! I Really want to use Internet Explorer...</a></div>
</div></body>
</html>