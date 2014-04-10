<?php
require_once('bootstrap.php');

echo "Version:" . $qupzilla_version;

if (!isset($_GET["v"]))
    exit;

// Save user's QupZilla version
$ip = getRealIP();
$version = $_GET["v"];

$stm = mysqli_prepare($con, "SELECT id FROM users_info WHERE ip=? LIMIT 1");
mysqli_stmt_bind_param($stm, 's', $ip);
mysqli_stmt_execute($stm);
mysqli_stmt_store_result($stm);

if (mysqli_stmt_num_rows($stm) > 0) {
    $stm = mysqli_prepare($con, "UPDATE users_info SET count=count+1, last_visit=now(), version=? WHERE ip=? LIMIT 1");
    mysqli_stmt_bind_param($stm, 'ss', $version, $ip);
    mysqli_stmt_execute($stm);
}
else {
    $stm = mysqli_prepare($con, "INSERT INTO users_info (ip,count,version,last_visit) VALUES (?, 1, ?, now())");
    mysqli_stmt_bind_param($stm, 'ss', $ip, $version);
    mysqli_stmt_execute($stm);
}
