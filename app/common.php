<?php
// Globals
$qupzilla_version = "2.2.1";

// Files
$qupzilla_downloads = [
    "appimage" => "/uploads/QupZilla-2.2.1.AppImage",
    "mac" => "/uploads/QupZilla-2.2.1.dmg",
    "os2" => "/uploads/qupzilla-1.8.9-os2.7z"
];

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

function getDownloadSha256($download) {
    global $qupzilla_downloads;
    $filename = $qupzilla_downloads[$download];
    if ($filename == "") {
        return "";
    }
    $filename = "../" . $filename;
    if (!file_exists($filename)) {
        return "";
    }
    return hash_file("sha256", $filename);
}
?>
