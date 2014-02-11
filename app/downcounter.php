<?php
require_once('bootstrap.php');

function echoString($type, $count){echo "<b>$type:</b> $count<br/>";}
$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='windows32'");
$row=mysqli_fetch_array($res);
echoString('Windows 32bit', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='windows64'");
$row=mysqli_fetch_array($res);
echoString('Windows 64bit', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='windows_portable'");
$row=mysqli_fetch_array($res);
echoString('Windows Portable', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='windows'");
$row=mysqli_fetch_array($res);
echoString('Windows New', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='windows_old'");
$row=mysqli_fetch_array($res);
echoString('Windows Old', $row[0]);
echo "<br/>";

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='debian32'");
$row=mysqli_fetch_array($res);
echoString('Debian 32bit', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='debian64'");
$row=mysqli_fetch_array($res);
echoString('Debian 64bit', $row[0]);
echo "<br/>";

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='linux32'");
$row=mysqli_fetch_array($res);
echoString('Linux 32bit', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='linux64'");
$row=mysqli_fetch_array($res);
echoString('Linux 64bit', $row[0]);
echo "<br/>";

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='chakra32'");
$row=mysqli_fetch_array($res);
echoString('Chakra 32bit', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='chakra64'");
$row=mysqli_fetch_array($res);
echoString('Chakra 64bit', $row[0]);
echo "<br/>";

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='arch32'");
$row=mysqli_fetch_array($res);
echoString('Arch 32bit', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='arch64'");
$row=mysqli_fetch_array($res);
echoString('Arch 64bit', $row[0]);
echo "<br/>";

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='suse'");
$row=mysqli_fetch_array($res);
echoString('Suse', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='fedora'");
$row=mysqli_fetch_array($res);
echoString('Fedora', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='mandriva'");
$row=mysqli_fetch_array($res);
echoString('Mandriva', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='os2'");
$row=mysqli_fetch_array($res);
echoString('OS/2', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='haiku'");
$row=mysqli_fetch_array($res);
echoString('Haiku OS', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='mac'");
$row=mysqli_fetch_array($res);
echoString('Mac OS X', $row[0]);

$res=mysqli_query($con, "SELECT count(id) FROM counter WHERE url='source' OR url='viewsource'");
$row=mysqli_fetch_array($res);
echoString('Source', $row[0]);
echo "<br/>";

$res=mysqli_query($con, "SELECT count(id) FROM counter ");
$row=mysqli_fetch_array($res);
echoString('All Downloads', $row[0]);

//echo mysqli_error_string($res);
?>
