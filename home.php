  <section id="content">
	<div class="container_24">
	<div class="top-block">
         <div class="top-column-left">
          <img src="images/computer-laptop-qupzilla.png">
	 </div>
	 <div class="top-column-right">
	 <div id="download-box">
	 <div class="download-text"><?php echo $LANG["header_description"]; ?></div>
	 <a href="download" class="download-button"><?php echo $LANG["actual_version_button"]; ?></a> <span class="download-version"><?php echo $qupzilla_version; ?></span>
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
            	<h2><?php echo $LANG["devnews_header"]; ?></h2>

<!-- Blogger widget -->
<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAq3SVCR-K0yI5_N0cswX1txT0VykOMYx3Zz_NUtzmY0vQvYY8dRRumpjgNGF4yD2y0xdghBjp7upN8A"></script>
<script type="text/javascript">
google.load("feeds", "1");
function OnLoad() {
   var feedControl = new google.feeds.FeedControl();
   feedControl.addFeed("http://blog.qupzilla.com/feeds/posts/default?alt=rss", "");
   feedControl.draw(document.getElementById("feedControl"));
}
google.setOnLoadCallback(OnLoad);
</script>
<!-- Blogger widget -->

<span id="feedControl"><?php echo $LANG["feed_loading"]; ?></span>
            </div>
          	<!-- /.box1 -->
          </div>
        </div>
      </div>
    </div>
  </section>
