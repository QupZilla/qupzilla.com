<?php
// Globals
$qupzilla_version = "2.2.2";

// Files
$qupzilla_downloads = [
    "appimage" => "/uploads/QupZilla-2.2.2.AppImage",
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
    $hash_filename = $filename . ".sha256";
    if (file_exists($hash_filename)) {
        return file_get_contents($hash_filename);
    }
    $hash = hash_file("sha256", $filename);
    $f = fopen($hash_filename, "w");
    if ($f) {
        fwrite($f, $hash);
        fclose($f);
    }
    return $hash;
}
?>
