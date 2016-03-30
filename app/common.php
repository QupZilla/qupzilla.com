<?php
// Globals
$qupzilla_version = "2.0.0";

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
