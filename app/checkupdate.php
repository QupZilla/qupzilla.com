<?php
require_once('bootstrap.php');

echo "Version:" . $qupzilla_version;

// Save user's QupZilla version
$ip=getRealIP();
$ref = $_GET["v"];
$stm=mysqli_prepare($con, "SELECT id FROM iamalive WHERE ip=? LIMIT 1");
mysqli_stmt_bind_param($stm, 's', $ip);
mysqli_stmt_execute($stm);
mysqli_stmt_store_result($stm);

if(mysqli_stmt_num_rows($stm)>0) {
    $stm = mysqli_prepare($con, "UPDATE iamalive SET pocet=pocet+1, datum=now(), referer=? WHERE ip=? LIMIT 1");
    mysqli_stmt_bind_param($stm, 'ss', $ref, $ip);
    mysqli_stmt_execute($stm);
}
else {
    $stm = mysqli_prepare($con, "INSERT INTO iamalive (ip,pocet,datum, referer) VALUES (?, '1', now(), ?) ");
    mysqli_stmt_bind_param($stm, 'ss', $ip, $ref);
    mysqli_stmt_execute($stm);
}
