<script>
  var fedora_mandriva = "http://software.opensuse.org/download/package.iframe?project=home:nowrep&amp;package=qupzilla";
  var suse_src = "http://software.opensuse.org/download/package.iframe?project=KDE:Extra&amp;package=qupzilla";

  function showDownload(os,title) {
    var elem;
    if (os == 'fedora') {
        var elem = document.getElementById('fedora-iframe');
        if (elem.src=="") elem.src = fedora_mandriva;
    }
    else if (os == 'mandriva') {
        var elem = document.getElementById('mandriva-iframe');
        if (elem.src=="") elem.src = fedora_mandriva;
    }
    else if (os == 'suse') {
        var elem = document.getElementById('suse-iframe');
        if (elem.src=="") elem.src = suse_src;
    }

    if (elem !== undefined)
        elem.style.visibility = "visible";

    document.getElementById('windows-box').style.display = "none";
    document.getElementById('debian-box').style.display = "none";
    document.getElementById('ubuntu-box').style.display = "none";
    document.getElementById('suse-box').style.display = "none";
    document.getElementById('fedora-box').style.display = "none";
    document.getElementById('mandriva-box').style.display = "none";
    document.getElementById('linux-box').style.display = "none";
    document.getElementById('source-box').style.display = "none";
    document.getElementById('mac-box').style.display = "none";
    document.getElementById('os2-box').style.display = "none";
    document.getElementById('haiku-box').style.display = "none";
    document.getElementById('chakra-box').style.display = "none";
    document.getElementById('gentoo-box').style.display = "none";
    document.getElementById('arch-box').style.display = "none";
    document.getElementById('freebsd-box').style.display = "none";

    document.getElementById(os + '-box').style.display = "block";

    document.getElementById('choose-os').innerText = title;

    var offset = document.getElementById('download-scroll-position').offsetTop;
    window.scrollTo(0, offset);
  }
  </script>

  <section id="content">
  <div class="container_24">
    <h2></h2>
     <div class="row-1 row">
      	<div class="os-wrapper">
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('windows', 'Windows')" >
            <img class="os-image" src="images/os/windows.png"></a>
            <p class="os-text">Windows</p>
          </div>
          <div class="grid_7">
        	<a style="cursor:pointer" onclick="showDownload('ubuntu', 'Ubuntu')" >
          	<img class="os-image" src="images/os/ubuntu.png"></a>
            <p class="os-text">Ubuntu</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('suse', 'openSUSE')" >
            <img class="os-image" src="images/os/opensuse.png"></a>
            <p class="os-text">openSUSE</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('fedora', 'Fedora')" >
            <img class="os-image" src="images/os/fedora.png"></a>
            <p class="os-text">Fedora</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('chakra', 'Chakra')" >
            <img class="os-image" src="images/os/chakra.png"></a>
            <p class="os-text">Chakra</p>
          </div>
          </div>

          <div class="os-wrapper">
          <div class="grid_7">
        	<a style="cursor:pointer" onclick="showDownload('debian', 'Debian')" >
            <img class="os-image" src="images/os/debian.png"></a>
            <p class="os-text">Debian</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('mandriva', 'Mandriva')" >
            <img class="os-image" src="images/os/mandriva.png"></a>
            <p class="os-text">Mandriva</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('arch', 'ArchLinux')" >
            <img class="os-image" src="images/os/arch.png"></a>
            <p class="os-text">ArchLinux</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('gentoo', 'Gentoo')" >
            <img class="os-image" src="images/os/gentoo.png"></a>
            <p class="os-text">Gentoo</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('linux', '<?php echo $LANG["other_linux"]; ?>')" >
            <img class="os-image" src="images/os/linux.png"></a>
            <p class="os-text"><?php echo $LANG["other_linux"]; ?></p>
          </div>
          </div>

          <div class="os-wrapper">
          <div class="grid_7">
             <a style="cursor:pointer" onclick="showDownload('freebsd', 'FreeBSD')" >
            <img class="os-image" src="images/os/freebsd.png"></a>
            <p class="os-text">FreeBSD</p>
	  </div>
         <div class="grid_7">
             <a style="cursor:pointer" onclick="showDownload('mac', 'Mac OS X')" >
            <img class="os-image" src="images/os/mac.png"></a>
            <p class="os-text">Mac OS X</p>
          </div>

          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('os2', 'OS/2')" >
            <img class="os-image" src="images/os/os2.png"></a>
            <p class="os-text">OS/2</p>
          </div>
          <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('haiku', 'Haiku OS')" >
            <img class="os-image" src="images/os/haiku.png"></a>
            <p class="os-text">Haiku OS</p>
          </div>
        <div class="grid_7">
            <a style="cursor:pointer" onclick="showDownload('source', '<?php echo $LANG["source_code"]; ?>')" >
            <img class="os-image" src="images/os/github.png"></a>
            <p class="os-text"><?php echo $LANG["source_code"]; ?></p>
          </div>
        </div>
    <a id="download-scroll-position"></a><p id="choose-os" class="os-choose"><?php echo $LANG["choose_os"]; ?></p>
      <div class="row-2"></div>
    </div>

    <div class="down-box" id="windows-box" style="display:none;">
    <p><?php echo $LANG["windows_text"]; ?></p>
      <a href="startdownload?windows" target="blank">Windows Installer</a> |
      <a href="startdownload?windows_portable" target="blank">Portable Edition</a>
    </div>

    <div class="down-box" id="debian-box" style="display:none;">
    <p><?php echo $LANG["packages_text"]; ?> (.deb) <?php echo $LANG["can_be_downloaded"]; ?></p>
      <a href="startdownload?debian32" target="blank">32bit Debian package</a> |
      <a href="startdownload?debian64" target="blank">64bit Debian package</a>
    </div>

    <div class="down-box" id="ubuntu-box" style="display:none;">
    <p><?php echo $LANG["ubuntu_text"]; ?></p>
      <pre style="margin-left: 200px;">
      sudo add-apt-repository ppa:nowrep/qupzilla
      sudo apt-get update
      sudo apt-get install qupzilla

      <?php echo $LANG["for_development_version"]; ?>

      sudo apt-get install qupzilla-next
      </pre>
    </div>

    <div class="down-box" id="gentoo-box" style="display:none;">
    <p><?php echo $LANG["install_run_command"]; ?></p>
      <pre style="margin-left: 330px;">
      emerge --ask qupzilla
      </pre>
    </div>

    <div class="down-box" id="arch-box" style="display:none;">
    <p><?php echo $LANG["install_run_command"]; ?></p>
      <pre style="margin-left: 340px;">
      pacman -S qupzilla
      </pre>
    </div>

    <div class="down-box" id="chakra-box" style="display:none;">
    <p><?php echo $LANG["install_run_command"]; ?></p>
      <pre style="margin-left: 340px;">
      pacman -S qupzilla
      </pre>
    </div>

    <div class="down-box" id="suse-box" style="display:none;">
    <p><?php echo $LANG["packages_text"]; ?> (.rpm) <?php echo $LANG["can_be_downloaded"]; ?></p>
     <iframe id="suse-iframe" width="900" height="450"> </iframe>
    </div>

    <div class="down-box" id="fedora-box" style="display:none;">
    <p><?php echo $LANG["packages_text"]; ?> (.rpm) <?php echo $LANG["can_be_downloaded"]; ?></p>
      <iframe id="fedora-iframe" width="900" height="450"> </iframe>
    </div>

    <div class="down-box" id="mandriva-box" style="display:none;">
    <p><?php echo $LANG["packages_text"]; ?> (.rpm) <?php echo $LANG["can_be_downloaded"]; ?></p>
      <iframe id="mandriva-iframe" width="900" height="450"> </iframe>
    </div>

    <div class="down-box" id="freebsd-box" style="display:none;">
    <p><?php echo $LANG["install_run_command"]; ?></p>
      <pre style="margin-left: 175px;">
      ports: cd /usr/ports/www/qupzilla/ && make install clean
      package: pkg install qupzilla
      </pre>
    </div>

    <div class="down-box" id="mac-box" style="display:none;">
    <p><?php echo $LANG["qupzilla_for_text"]; ?> Mac OS X <?php echo $LANG["can_be_downloaded"]; ?></p>
      <a href="startdownload?mac" target="blank">Mac OS X image (.dmg)</a>
    </div>

    <div class="down-box" id="os2-box" style="display:none;">
    <p><?php echo $LANG["qupzilla_for_text"]; ?> OS/2 <?php echo $LANG["can_be_downloaded"]; ?></p>
      <a href="startdownload?os2" target="blank">OS/2 package</a>
    </div>

    <div class="down-box" id="haiku-box" style="display:none;">
    <p><?php echo $LANG["qupzilla_for_text"]; ?> Haiku OS <?php echo $LANG["can_be_downloaded"]; ?></p>
      <a href="startdownload?haiku" target="blank">Haiku OS package</a>
       (on haikuware.com)
    </div>

    <div class="down-box" id="linux-box" style="display:none;">
    <p><?php echo $LANG["tarballs_text"]; ?> (.tar.gz) <?php echo $LANG["can_be_downloaded"]; ?></p>
      <a href="startdownload?linux32" target="blank">32bit tarball</a> |
      <a href="startdownload?linux64" target="blank">64bit tarball</a>
    </div>

    <div class="down-box" id="source-box" style="display:none;">
    <p><?php echo $LANG["source_text"]; ?></p>
    <pre style="margin-left: 200px;">
      git clone git://github.com/QupZilla/qupzilla.git
    </pre>
    <p><?php echo $LANG["source_text2"]; ?></p>
      <a href="startdownload?viewsource" target="blank"><?php echo $LANG["view_source"]; ?></a> |
      <a href="startdownload?source" target="blank"><?php echo $LANG["download_snapshot"]; ?></a>
    </div>

  </section>
