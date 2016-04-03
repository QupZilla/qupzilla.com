 <section id="content">
  	<div class="container_24">
     <div class="row-1 row">
      	<div class="wrapper">

          	<h2><?php echo $LANG["contribute_to"]; ?></h2>
            <img id="map_contribute" src="images/map.gif" alt="">
              <p><?php echo $LANG["contribute_text"]; ?>
            </p>
            <h4><?php echo $LANG["getting_source"]; ?></h4>
            <p><?php echo $LANG["getting_source_text1"]; ?>
            <pre>$ git clone git://github.com/QupZilla/qupzilla.git</pre>
            <br/><?php echo $LANG["getting_source_text2"]; ?>
            </p>
            <h4><?php echo $LANG["translating"]; ?></h4>
            <p><?php echo $LANG["translating_text"]; ?>
            <br/><br/>
            <?php echo $LANG["translating_moreinfo"]; ?>
            </p>
            <a name="donate"></a>
            <h4><?php echo $LANG["donate"]; ?></h4>
            <p><?php echo $LANG["donate_text"]; ?>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="display:inline;padding-right:15px;">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="5LPYE46QJRNLC">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
<span id="donate-bitcoin"></span>
<script>
  $(function() {
    $('#donate-bitcoin').coinTipper({
      type: 'donate',
      currency: 'bitcoin',
      iso: 'BTC',
      address: '1PLPEJ56kSEEzemzaAE5Xd1LCmPy73bgtV',
      label: 'QupZilla'
    });
  });
</script>
            </p>

          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>
