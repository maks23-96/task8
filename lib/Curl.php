<?php
class Curl {
  protected $url;


  function GetWebPage($url)
  {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_ENCODING, "");

    curl_exec($ch);
    curl_close($ch);
  }


}
?>
