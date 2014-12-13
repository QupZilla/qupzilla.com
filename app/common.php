<?php
// Globals
$qupzilla_version = "1.8.5";
$qupzilla_version_date = "12.12.2014";

// Functions
function getRealIp() {
     $ipaddress = '';

     if (isset($_SERVER['HTTP_CLIENT_IP']))
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];

     if ($ipaddress == '' && isset($_SERVER['HTTP_X_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];

     if ($ipaddress == '' && isset($_SERVER['HTTP_X_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];

     if ($ipaddress == '' && isset($_SERVER['HTTP_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];

     if ($ipaddress == '' && isset($_SERVER['HTTP_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_FORWARDED'];

     if ($ipaddress == '' && isset($_SERVER['REMOTE_ADDR']))
         $ipaddress = $_SERVER['REMOTE_ADDR'];

     return $ipaddress == '' ? 'UNKNOWN' : $ipaddress;
}
?>
