<!DOCTYPE html>
<html lang="<?php echo $lang_id; ?>">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="description" content="QupZilla is a lightweight multiplatform web browser written in Qt Framework and using its web rendering core QtWebKit.">
  <meta name="keywords" content="qupzilla, web browser, qt, qtwebkit, lightweight, multiplatform, crossplatform">
  <meta name="author" content="David Rosca">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width,initial-scale=1"> 
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" type="text/css" media="screen">
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js"></script>
  <title><?php echo $LANG["site_title"]; ?></title>
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/ie/ie_png.js"></script>
    <script type="text/javascript">
        ie_png.fix('.png, h3 img, .button span');
    </script>
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/ie/html5.js"></script>
  <![endif]-->
  <?php if ($lang_direction == "RTL") { ?>
    <link rel="stylesheet" href="css/rtl-helper.css" type="text/css" media="all">
  <?php } ?>
  <link rel="stylesheet" href="css/lang/<?php echo $lang_id; ?>.css" type="text/css" media="all">
</head>
<body>
    <?php if ($lang_direction == "RTL") { ?>
        <a target="_blank" href="https://github.com/QupZilla/"><img class="forkme" style="position: absolute; top: 0; left: 0; right: auto; border: 0;" src="images/forkme_rtl.png" alt="Fork me on GitHub"></a>
    <?php } else { ?>
        <a target="_blank" href="https://github.com/QupZilla/"><img class="forkme" style="position: absolute; top: 0; left: auto; right: 0; border: 0;" src="images/forkme.png" alt="Fork me on GitHub"></a>
    <?php } ?>

<!-- header -->
  <header>
    <div class="container_24">
	<!-- .logo -->
	<div id="logbase">    	
    	<div class="logo">
      	<h1><a href="/"><?php echo $LANG["qupzilla"]; ?></a></h1>
		</div>
	  </div>
    	<!-- /.logo -->
      <nav>
        <ul>
          <li><a href="home" <?php if($current_page == "home") echo "class=\"current\""; ?> ><?php echo $LANG["menu_home"]; ?></a></li>
          <li><a href="screenshots" <?php if($current_page == "screenshots") echo "class=\"current\""; ?> ><?php echo $LANG["menu_screenshots"]; ?></a></li>
          <li><a href="download" <?php if($current_page == "download") echo "class=\"current\""; ?> ><?php echo $LANG["menu_download"]; ?></a></li>
          <li><a href="https://github.com/QupZilla/qupzilla/wiki/FAQ" target="blank"><?php echo $LANG["menu_faq"]; ?></a></li>
          <li><a href="contribute" <?php if($current_page == "contribute") echo "class=\"current\""; ?> ><?php echo $LANG["menu_about"]; ?></a></li>
        </ul>
      </nav>
    </div>
  </header>
