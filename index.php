<?php 

include "settings.php";
include "layout.php";
include "rest_functions.php";

write_html_head();
write_html_menu();
?>

<h1>OpenNaaS Datacenter GUI</h1>

This is an example interface for operating the OpenNaaS REST interface.
<br><i>Copyright &copy; 2014 <br>SURFsara B.V.</i>
<br><br>Project homepage: <a href="http://www.opennaas.org/" target="_blank">www.opennaas.org</a><br>
<br><div id="check_update" style="display:none"></div><br><b>Developed by:</b>
<br>Erik Ruiter
<br><br><b>License:</b>
<br>This software is distributed under the <a href="http://www.opensource.org/licenses/gpl-2.0.php" target="_blank">
GNU General Public License (GPL)</a>.
<br><br><b>Disclaimer of warranty:</b>
<br>OpenNaas-DC-GUI is provided as is with NO WARRANTY OF ANY KIND, including the warranty
<br>of design, merchantability, and fitness for a particular purpose.
	<br><br><b>Powered by:</b><br><br>
<div style="vertical-align:middle">
 <a href="http://www.surfsara.nl" target=_blank>
 <img src="images/logo/surfsara_logo.png" style="vertical-align:middle" alt="surfsara-logo"></a>
 <a href="http://www.jquery.org" target=_blank>
 <img src="images/logo/jquery_logo.gif" style="vertical-align:middle;margin-left:30px" alt="jquery_logo"></a>
 <a href="http://github.com/sara-nl" target=_blank>
 <img src="images/logo/github_logo.gif" style="vertical-align:middle;margin-left:30px" alt="github_logo"></a>
 <br><br><br>
 <a href="http://nconf.org" target=_blank>
 <img src="images/logo/nc-logo.gif" style="vertical-align:middle;margin-left:3px" alt="NConf-logo"></a>
 <a href="http://www.i2cat.net" target=_blank>
 <img src="images/logo/i2cat-logo.png" style="vertical-align:middle;margin-left:30px" alt="I2cat-logo"></a>
 <a href="http://www.opennaas.org" target=_blank>
 <img src="images/logo/opennaas.png" style="vertical-align:middle;margin-left:28px" alt="opennaas-logo"></a>
</div>                 

<?php
write_html_footer();

?>