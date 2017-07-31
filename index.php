<?php
include('config.php');
include('lib/Curl.php');
$curl = new Curl();
$curl->GetWebPage("https://www.google.com.ua/search?q=php&gws_rd=cr,ssl&ei=bGt_WaWPEsb3Uuvoh_AM");


include('templates/index.php');
?>
