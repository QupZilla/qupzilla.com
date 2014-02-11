<?php
$mail = $_POST["mail"];
$type = stripslashes($_POST["type"]);
$text = stripslashes($_POST["text"]);

$text = "Operating System: \t" . stripslashes($_POST["os"]) . "\n" .
        "Application Version: \t" . stripslashes($_POST["version"]) . "\n" .
        "Qt Version: \t" . stripslashes($_POST["qtversion"]) . "\n" .
        "WebKit Version: \t" . stripslashes($_POST["webkitversion"]) . "\n" .
        "=============================================== \n\n" . $text;

if ($type == "" ||  $text == "")
    die("All fields are required!");
if(!mail("nowrep@gmail.com", "QupZilla Issue: $type", $text, "From: $mail\r\nContent-Type: text/plain; charset=utf-8\r\n"))
die("Error while reporting issue.");
?>
<html><head>
<title>Report Issue</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<style>
html {
  background: #eeeeee;
  font: 13px/22px "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #525c66;
}

html * {
  font-size: 100%;
  line-height: 1.6;
}

#box {
  max-width: 650px;
  overflow:auto;
  margin: 25px auto 10px auto;
  padding: 10px 40px;
  border-width: 20px;
  -webkit-border-image: url(images/box-border.png) 25;
  text-align: left;
}

h1 {
  color: #1a4ba4;
  font-size: 160%;
  margin-bottom: 0px;
}
</style>
</head>
<body>
  <div id="box">
<h1 align="center">Issue reported</h1>
  <center><p>Thank You for report. Your issue will be reviewed as soon as possible. <br/>You will be updated by e-mail.</p></center>

  </div>
</body></html>
