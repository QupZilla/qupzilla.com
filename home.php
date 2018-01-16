  <section id="content">
	<div class="container_24">
	<div class="top-block">
         <div class="top-column-left">
          <img src="images/computer-laptop-qupzilla.png">
	 </div>
	 <div class="top-column-right">
	 <div id="download-box">
	 <div class="download-text"><?php echo $LANG["header_description"]; ?></div>
<?php
    $download_link = 'download';
    if (stripos($_SERVER['HTTP_USER_AGENT'], 'windows') !== false) {
        $download_link .= '#windows';
    } else if (stripos($_SERVER['HTTP_USER_AGENT'], 'mac os x') !== false) {
        $download_link .= '#mac';
    } else if (stripos($_SERVER['HTTP_USER_AGENT'], 'ubuntu') !== false) {
        $download_link .= '#ubuntu';
    } else if (stripos($_SERVER['HTTP_USER_AGENT'], 'linux') !== false) {
        $download_link .= '#linux';
    }
?>
     <a href="<?php echo $download_link; ?>" class="download-button"><?php echo $LANG["actual_version_button"]; ?></a> <span class="download-version"><?php echo $qupzilla_version; ?></span>
	 </div>
	 </div>
	</div>
      <div class="row-1 row">
      	<div class="clearfix">
        </div>
      </div>

      <div class="row-2">
      	<div class="wrapper">

     	       <div class="grid_15">
               <div class="suffix_1">

              <h4><?php echo $LANG["looknfeel_header"]; ?></h4>
              <span class="pindex"><?php echo $LANG["looknfeel_text"]; ?></span>

              <h4><?php echo $LANG["library_header"]; ?></h4>
              <span class="pindex"><?php echo $LANG["library_text"]; ?></span>

              <h4><?php echo $LANG["adblock_header"]; ?></h4>
              <span class="pindex"><?php echo $LANG["adblock_text"]; ?></span>

              <h4><?php echo $LANG["speeddial_header"]; ?></h4>
              <span class="pindex"><?php echo $LANG["speeddial_text"]; ?></span>

            </div>
          </div>
        	<div class="grid_9">
          	<!-- .box1 -->
          	<div class="box1">
                    <h2 style="margin-bottom:0px;"><?php echo $LANG["devnews_header"]; ?></h2>
                    <iframe src="blogger-widget.php" style="width:330px; height:400px;" scrolling="no"> </iframe>
                </div>

        <div style="margin: 30px 0px 15px 30px;">
         <a style="margin-right:5px;" href="contribute#donate" class="download-button"><?php echo $LANG["donate"]; ?></a>
         <span style="font-size:18px;"><?php echo $LANG["dev_donatehelp"]; ?></span>
        </div>
          	<!-- /.box1 -->
          </div>
        </div>
      </div>
    </div>
  </section>
