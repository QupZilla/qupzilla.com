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
            <p class="os-text"><?php echo $LANG["other_linux"]; ?></p>
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
            <p class="os-text"><?php echo $LANG["source_code"]; ?></p>
          </div>
        </div>
      </div>

      <div class="rowd-2 boxes">
        <div class="down-box" id="windows">
            <p class="title">Windows</p>
            <p><?php echo $LANG["windows_text"]; ?></p>
              <a href="startdownload?windows" target="blank">Windows Installer</a> |
              <a href="startdownload?windows_portable" target="blank">Portable Edition</a>
        </div>

        <div class="down-box" id="debian">
            <p class="title">Debian</p>
            <p><?php echo $LANG["packages_text"]; ?> (.deb) <?php echo $LANG["can_be_downloaded"]; ?></p>
              <a href="startdownload?debian32" target="blank">32bit Debian package</a> |
              <a href="startdownload?debian64" target="blank">64bit Debian package</a>
        </div>

        <div class="down-box" id="ubuntu">
            <p class="title">Ubuntu</p>
            <p><?php echo $LANG["ubuntu_text"]; ?></p>
              <pre style="margin-left: 200px;">
      sudo add-apt-repository ppa:nowrep/qupzilla
      sudo apt-get update
      sudo apt-get install qupzilla
              </pre>
        </div>

        <div class="down-box" id="gentoo">
            <p class="title">Gentoo</p>
            <p><?php echo $LANG["install_run_command"]; ?></p>
              <pre style="margin-left: 330px;">
      emerge --ask qupzilla
              </pre>
        </div>

        <div class="down-box" id="arch">
            <p class="title">Arch Linux</p>
            <p><?php echo $LANG["install_run_command"]; ?></p>
              <pre style="margin-left: 340px;">
      pacman -S qupzilla
              </pre>
            <p><?php echo $LANG["install_qt4_run_command"]; ?></p>
              <pre style="margin-left: 340px;">
      pacman -S qupzilla-qt4
              </pre>
        </div>

        <div class="down-box" id="chakra">
            <p class="title">Chakra</p>
            <p><?php echo $LANG["install_run_command"]; ?></p>
              <pre style="margin-left: 340px;">
      pacman -S qupzilla
              </pre>
        </div>

        <div class="down-box" id="suse">
            <p class="title">openSUSE</p>
            <p><?php echo $LANG["packages_text"]; ?> (.rpm) <?php echo $LANG["can_be_downloaded"]; ?></p>
             <iframe id="suse-iframe" width="900" height="450" src="http://software.opensuse.org/download/package.iframe?project=KDE:Extra&amp;package=qupzilla"> </iframe>
        </div>

        <div class="down-box" id="fedora">
            <p class="title">Fedora</p>
            <p><?php echo $LANG["install_run_command"]; ?></p>
              <pre style="margin-left: 340px;">
      yum install qupzilla
              </pre>
        </div>

        <div class="down-box" id="mageia">
            <p class="title">Mageia</p>
            <p><?php echo $LANG["install_run_command"]; ?></p>
              <pre style="margin-left: 340px;">
      urpmi qupzilla
              </pre>
        </div>

        <div class="down-box" id="freebsd">
            <p class="title">FreeBSD</p>
            <p><?php echo $LANG["install_run_command"]; ?></p>
              <pre style="margin-left: 175px;">
      ports: cd /usr/ports/www/qupzilla/ && make install clean
      package: pkg install qupzilla
              </pre>
        </div>

        <div class="down-box" id="mac">
            <p class="title">Mac OS X</p>
            <p><?php echo $LANG["qupzilla_for_text"]; ?> Mac OS X <?php echo $LANG["can_be_downloaded"]; ?></p>
              <a href="startdownload?mac" target="blank">Mac OS X image (.dmg)</a>
        </div>

        <div class="down-box" id="os2">
            <p class="title">OS/2</p>
            <p><?php echo $LANG["qupzilla_for_text"]; ?> OS/2 <?php echo $LANG["can_be_downloaded"]; ?></p>
              <a href="startdownload?os2" target="blank">OS/2 package</a>
        </div>

        <div class="down-box" id="haiku">
            <p class="title">Haiku</p>
            <p><?php echo $LANG["qupzilla_for_text"]; ?> Haiku <?php echo $LANG["can_be_downloaded"]; ?></p>
              <a href="startdownload?haiku" target="blank">Haiku package</a>
               (on depot.haiku-os.org)
        </div>

        <div class="down-box" id="linux">
            <p class="title"><?php echo $LANG["other_linux"]; ?></p>
            <p><?php echo $LANG["tarballs_text"]; ?> (.tar.gz) <?php echo $LANG["can_be_downloaded"]; ?></p>
              <a href="startdownload?linux32" target="blank">32bit tarball</a> |
              <a href="startdownload?linux64" target="blank">64bit tarball</a>
        </div>

        <div class="down-box" id="source">
            <p class="title"><?php echo $LANG["source_code"]; ?></p>
            <p><?php echo $LANG["source_text"]; ?></p>
            <pre style="margin-left: 200px;">
      git clone git://github.com/QupZilla/qupzilla.git
            </pre>
            <p><?php echo $LANG["source_text2"]; ?></p>
              <a href="startdownload?viewsource" target="blank"><?php echo $LANG["view_source"]; ?></a> |
              <a href="startdownload?source" target="blank"><?php echo $LANG["download_snapshot"]; ?></a>
        </div>
      </div>
  </section>
