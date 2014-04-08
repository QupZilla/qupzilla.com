<?php
require_once('app/bootstrap.php');
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<style>
.gfc-control { margin-top: -10px; }
.gf-author { display: none !important;}
.gf-spacer { display: none !important;}
.gf-snippet { margin-bottom:15px; }

</style>
</head>
<body style="background: #e5e5e5; width:320px; margin:3px; padding:0;">
<div style="background: #e5e5e5; font-size:85%;">

<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAq3SVCR-K0yI5_N0cswX1txT0VykOMYx3Zz_NUtzmY0vQvYY8dRRumpjgNGF4yD2y0xdghBjp7upN8A"></script>
<script type="text/javascript">
google.load("feeds", "1");
function OnLoad() {
   var feedControl = new google.feeds.FeedControl();
   feedControl.addFeed("http://blog.qupzilla.com/feeds/posts/default?alt=rss", "");
   feedControl.setLinkTarget("_blank");
   feedControl.draw(document.getElementById("feedControl"));
}
google.setOnLoadCallback(OnLoad);
</script>

<span id="feedControl"><?php echo $LANG["feed_loading"]; ?></span>
</div>
</body>
</html>
