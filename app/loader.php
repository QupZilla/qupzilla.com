<?php
require_once('bootstrap.php');

$slash_pos = strrpos($_SERVER['REQUEST_URI'], "/");
$request = substr($_SERVER['REQUEST_URI'], $slash_pos + 1);
$query = "";

$query_pos = strrpos($request, "?");
if ($query_pos) {
    $query = substr($request, $query_pos + 1);
    $request = substr($request, 0, $query_pos);
}

switch($request)
{
case('screenshots'):
    $current_page = $request;
    require_once('../header.php');
    require_once('../screenshots.php');
    require_once('../footer.php');
    break;

case('download'):
    $current_page = $request;
    require_once('../header.php');
    require_once('../download.php');
    require_once('../footer.php');
    break;

case('contribute'):
    $current_page = $request;
    require_once('../header.php');
    require_once('../contribute.php');
    require_once('../footer.php');
    break;

case ('startdownload'):
    require_once('startdownload.php');
    break;

case ('checkupdate'):
    require_once('checkupdate.php');
    break;

case ('showcounter'):
    require_once('downcounter.php');
    break;

default:
    $current_page = "home";
    require_once('../header.php');
    require_once('../home.php');
    require_once('../footer.php');
    break;
}
?>
