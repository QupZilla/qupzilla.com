<?php
define("DB_HOST", 'localhost');
define("DB_USER", '');
define("DB_PASS", '');
define("DB_NAME", '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$con)
    die("Cannot connect do database!");
?>
