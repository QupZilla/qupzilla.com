<!DOCTYPE html>
<html lang="<?php echo $lang_id; ?>">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="description" content="QupZilla is a lightweight multiplatform web browser written in Qt Framework and using its web rendering engine QtWebEngine.">
  <meta name="keywords" content="qupzilla, web browser, qt, qtwebengine, lightweight, multiplatform, crossplatform">
  <meta name="author" content="David Rosca">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/jquery.cointipper.min.css" type="text/css" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" type="text/css" media="screen">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js"></script>
  <script src="js/jquery.cointipper-pack.min.js"></script>
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

    <a href="https://falkon.org" style="text-decoration:none;">
    <div style="text-align:center;padding:10px;background:#7d339e;color:#ffffff;">
        <img style="display:block;margin:0 auto 10px auto;" src="images/falkon.svg">
        QupZilla continues development as <b>Falkon browser</b>. There will be no more QupZilla releases.
    </div>
    </a>

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
          <li><a href="about" <?php if($current_page == "about") echo "class=\"current\""; ?> ><?php echo $LANG["menu_mabout"]; ?></a></li>
          <li><a href="screenshots" <?php if($current_page == "screenshots") echo "class=\"current\""; ?> ><?php echo $LANG["menu_screenshots"]; ?></a></li>
          <li><a href="download" <?php if($current_page == "download") echo "class=\"current\""; ?> ><?php echo $LANG["menu_download"]; ?></a></li>
          <li><a href="https://github.com/QupZilla/qupzilla/wiki/FAQ" target="blank"><?php echo $LANG["menu_faq"]; ?></a></li>
          <li><a href="contribute" <?php if($current_page == "contribute") echo "class=\"current\""; ?> ><?php echo $LANG["menu_about"]; ?></a></li>
        </ul>
      </nav>
    </div>
  </header>
