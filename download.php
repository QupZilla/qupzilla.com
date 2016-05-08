
<!DOCTYPE html>
<html lang="en_US">
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
  <title>QupZilla - Lightweight multiplatform browser</title>
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
    <link rel="stylesheet" href="css/lang/en_US.css" type="text/css" media="all">
</head>
<body>
            <a target="_blank" href="https://github.com/QupZilla/"><img class="forkme" style="position: absolute; top: 0; left: auto; right: 0; border: 0;" src="images/forkme.png" alt="Fork me on GitHub"></a>
    
<!-- header -->
  <header>
    <div class="container_24">
	<!-- .logo -->
	<div id="logbase">
    	<div class="logo">
      	<h1><a href="/">QupZilla</a></h1>
		</div>
	  </div>
    	<!-- /.logo -->
      <nav>
        <ul>
          <li><a href="home"  >Home</a></li>
          <li><a href="about"  >About</a></li>
          <li><a href="screenshots"  >Screenshots</a></li>
          <li><a href="download" class="current" >Download</a></li>
          <li><a href="https://github.com/QupZilla/qupzilla/wiki/FAQ" target="blank">FAQ</a></li>
          <li><a href="contribute"  >Contribute</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="content">
  <div class="container_24">
    <h2></h2>
      <div class="row-1 rowd">
        <div class="os-wrapper">
          <div class="grid_7">
			<!--[if IE 6]>
				<a style="cursor:pointer" href="http://qupzilla.com/uploads/qupzilla186.exe">
			<![endif]-->
			<!--[if !IE 6]>-->
				<a style="cursor:pointer" href="#windows">
			<!--<![endif]-->
            <img class="os-image" src="images/os/windows.png"></a>
            <p class="os-text">Windows</p>
          </div>
			<!--[if IE 6]>
		  <div class="grid_7">
            <a style="cursor:pointer" href="http://qupzilla.com/uploads/qupzilla186_portable.zip" >
            <img class="os-image" src="images/os/windows.png"></a>
            <p class="os-text">Windows portable</p>
          </div>
			<![endif]-->
			<!--[if !IE 6]>-->
          <div class="grid_7">
            <a style="cursor:pointer" href="#ubuntu" >
            <img class="os-image" src="images/os/ubuntu.png"></a>
            <p class="os-text">Ubuntu</p>
          </div>
			<!--<![endif]-->
          <div class="grid_7">
            <a style="cursor:pointer" href="#suse" >
            <img class="os-image" src="images/os/opensuse.png"></a>
            <p class="os-text">openSUSE</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" href="#fedora" >
            <img class="os-image" src="images/os/fedora.png"></a>
            <p class="os-text">Fedora</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" href="#chakra" >
            <img class="os-image" src="images/os/chakra.png"></a>
            <p class="os-text">Chakra</p>
          </div>
        </div>

        <div class="os-wrapper">
          <div class="grid_7">
            <a style="cursor:pointer" href="#debian" >
            <img class="os-image" src="images/os/debian.png"></a>
            <p class="os-text">Debian</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" href="#mageia" >
            <img class="os-image" src="images/os/mageia.png"></a>
            <p class="os-text">Mageia</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" href="#arch" >
            <img class="os-image" src="images/os/arch.png"></a>
            <p class="os-text">Arch Linux</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" href="#gentoo" >
            <img class="os-image" src="images/os/gentoo.png"></a>
            <p class="os-text">Gentoo</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" href="#linux" >
            <img class="os-image" src="images/os/linux.png"></a>
            <p class="os-text">Other Linux</p>
          </div>
        </div>

        <div class="os-wrapper">
          <div class="grid_7">
             <a style="cursor:pointer" href="#freebsd">
            <img class="os-image" src="images/os/freebsd.png"></a>
            <p class="os-text">FreeBSD</p>
          </div>
          <div class="grid_7">
             <a style="cursor:pointer" href="#mac" >
            <img class="os-image" src="images/os/mac.png"></a>
            <p class="os-text">Mac OS X</p>
          </div>

          <div class="grid_7">
            <a style="cursor:pointer" href="#os2" >
            <img class="os-image" src="images/os/os2.png"></a>
            <p class="os-text">OS/2</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" href="#haiku" >
            <img class="os-image" src="images/os/haiku.png"></a>
            <p class="os-text">Haiku</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" href="#source" >
            <img class="os-image" src="images/os/github.png"></a>
            <p class="os-text">Source Code</p>
          </div>
        </div>
      </div>

      <div class="rowd-2 boxes">
        <div class="down-box" id="windows">
            <p class="title">Windows</p>
            <p>32bit and 64bit Windows installers can be downloaded by clicking on links below</p>
              <a href="startdownload?windows" target="blank">Windows Installer</a> |
              <a href="startdownload?windows_portable" target="blank">Portable Edition</a>
        </div>

        <div class="down-box" id="debian">
            <p class="title">Debian</p>
            <p>32bit and 64bit packages (.deb) can be downloaded by clicking on links below</p>
              <a href="startdownload?debian32" target="blank">32bit Debian package</a> |
              <a href="startdownload?debian64" target="blank">64bit Debian package</a>
        </div>

        <div class="down-box" id="ubuntu">
            <p class="title">Ubuntu</p>
            <p>Ubuntu (and other Ubuntu-based linux distros) users can install QupZilla by running these commands</p>
              <pre style="margin-left: 200px;">
      sudo add-apt-repository ppa:nowrep/qupzilla
      sudo apt-get update
      sudo apt-get install qupzilla
              </pre>
        </div>

        <div class="down-box" id="gentoo">
            <p class="title">Gentoo</p>
            <p>You can install QupZilla by running this command</p>
              <pre style="margin-left: 330px;">
      emerge --ask qupzilla
              </pre>
        </div>

        <div class="down-box" id="arch">
            <p class="title">Arch Linux</p>
            <p>You can install QupZilla by running this command</p>
              <pre style="margin-left: 340px;">
      pacman -S qupzilla
              </pre>
            <p>You can install QupZilla on Qt4 by running this command</p>
              <pre style="margin-left: 340px;">
      pacman -S qupzilla-qt4
              </pre>
        </div>

        <div class="down-box" id="chakra">
            <p class="title">Chakra</p>
            <p>You can install QupZilla by running this command</p>
              <pre style="margin-left: 340px;">
      pacman -S qupzilla
              </pre>
        </div>

        <div class="down-box" id="suse">
            <p class="title">openSUSE</p>
            <p>32bit and 64bit packages (.rpm) can be downloaded by clicking on links below</p>
             <iframe id="suse-iframe" width="900" height="450" src="http://software.opensuse.org/download/package.iframe?project=KDE:Extra&amp;package=qupzilla"> </iframe>
        </div>

        <div class="down-box" id="fedora">
            <p class="title">Fedora</p>
            <p>You can install QupZilla by running this command</p>
              <pre style="margin-left: 340px;">
      yum install qupzilla
              </pre>
        </div>

        <div class="down-box" id="mageia">
            <p class="title">Mageia</p>
            <p>You can install QupZilla by running this command</p>
              <pre style="margin-left: 340px;">
      urpmi qupzilla
              </pre>
        </div>

        <div class="down-box" id="freebsd">
            <p class="title">FreeBSD</p>
            <p>You can install QupZilla by running this command</p>
              <pre style="margin-left: 175px;">
      ports: cd /usr/ports/www/qupzilla/ && make install clean
      package: pkg install qupzilla
              </pre>
        </div>

        <div class="down-box" id="mac">
            <p class="title">Mac OS X</p>
            <p>QupZilla for Mac OS X can be downloaded by clicking on links below</p>
              <a href="startdownload?mac" target="blank">Mac OS X image (.dmg)</a>
        </div>

        <div class="down-box" id="os2">
            <p class="title">OS/2</p>
            <p>QupZilla for OS/2 can be downloaded by clicking on links below</p>
              <a href="startdownload?os2" target="blank">OS/2 package</a>
        </div>

        <div class="down-box" id="haiku">
            <p class="title">Haiku</p>
            <p>QupZilla for Haiku can be downloaded by clicking on links below</p>
              <a href="startdownload?haiku" target="blank">Haiku package</a>
               (on depot.haiku-os.org)
        </div>

        <div class="down-box" id="linux">
            <p class="title">Other Linux</p>
            <p>32bit and 64bit precompiled tarballs (.tar.gz) can be downloaded by clicking on links below</p>
              <a href="startdownload?linux32" target="blank">32bit tarball</a> |
              <a href="startdownload?linux64" target="blank">64bit tarball</a>
        </div>

        <div class="down-box" id="source">
            <p class="title">Source Code</p>
            <p>You can get source code by cloning repository (if you have git installed)</p>
            <pre style="margin-left: 200px;">
      git clone git://github.com/QupZilla/qupzilla.git
            </pre>
            <p>You can also view it online and download it in zip archive</p>
              <a href="startdownload?viewsource" target="blank">view source on github.com</a> |
              <a href="startdownload?source" target="blank">download current snapshot</a>
        </div>
      </div>
  </section>
<!-- footer -->
  <footer>
    <div class="container_24">
        <iframe src="https://tylerlh.github.io/github-latest-commits-widget/?username=QupZilla&repo=qupzilla&limit=5"
        allowtransparency="true" frameborder="0" scrolling="no" id="gh-frame"></iframe>
        <nav>
        <ul>
        <li><a href="/">Home</a>|</li>
        <li><a href="/about">About</a>|</li>
        <li><a href="/download">Download</a>|</li>
        <li><a href="https://github.com/QupZilla/qupzilla/wiki/FAQ" target="blank">FAQ</a>|</li>
        <li><a href="/contribute">Contribute</a></li>
        </ul>
        </nav>
      (c) 2010 - 2015 David Rosca and the QupZilla Community      <p>Laptop icon designed by the Oxygen Project</p>
      <p> </p>
      Available page translations:     <div class="languages">
      <nav>
        <ul>
        <li><a href="?lang=ar">العربية</a></li>
        <li><a href="?lang=es">Castellano</a></li>
        <li><a href="?lang=ca">Català</a></li>
        <li><a href="?lang=cs">Čeština</a></li>
        <li><a href="?lang=de">Deutsch</a></li>
        <li><a href="?lang=en" class="english">English</a></li>
        <li><a href="?lang=el">Ελληνικά</a></li>
        <li><a href="?lang=uk">Українська</a></li>
        </ul>
        <ul>
        <li><a href="?lang=fa">پارسی</a></li>
        <li><a href="?lang=fr">Français</a></li>
        <li><a href="?lang=gl">Galego</a></li>
        <li><a href="?lang=he">עברית</a></li>
        <li><a href="?lang=hr">Hrvatski</a></li>
        <li><a href="?lang=it">Italiano</a></li>
        <li><a href="?lang=lt">Lietuvių</a></li>
        <li><a href="?lang=sk">Slovenčina</a></li>
        </ul>
        <ul>
        <li><a href="?lang=ka">ქართული</a></li>
        <li><a href="?lang=nl">Nederlands</a></li>
        <li><a href="?lang=nqo">ߒߞߏ</a></li>
        <li><a href="?lang=ja">日本語</a></li>
        <li><a href="?lang=pl">Polski</a></li>
        <li><a href="?lang=pt">Português</a></li>
        <li><a href="?lang=pt-br">Português (Brazil)</a></li>
        <li><a href="?lang=ru">Pусский</a></li>
        </ul>
        <ul>
        <li><a href="?lang=sr">српски (екавски)&lrm;</a></li>
        <li><a href="?lang=sr-ba">српски (ијекавски)&lrm;</a></li>
        <li><a href="?lang=id">Bahasa Indonesia</a></li>
        <li><a href="?lang=lv">Latviešu valoda</a></li>
        <li><a href="?lang=fi">Suomi</a></li>
        <li><a href="?lang=tr">Türkçe</a></li>
        <li><a href="?lang=zh-cn">简体中文</a></li>
        <li><a href="?lang=zh-tw">繁体中文</a></li>
        </ul>
      </nav>
     </div>
    </div>
</footer>
</body>
</html>
