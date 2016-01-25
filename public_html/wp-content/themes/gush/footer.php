</div><!--//contents-->

<!-- footer -->
<footer id="footer">
<!--フッター分岐-->
<?php if(is_mobile()) { ?>
<!--スマホ表示エリア-->
<!--//スマホ表示エリア-->
<?php } else { ?>
<!--PC3段 タブレット1+2段-->
<div id="footer-in" class="cleafix">
<!--フッター左-->
<div class="footer_l">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar( 'footer_left' ) ) : else : ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/gush336280.jpg" alt="" width="336" height="280" />
<?php endif; ?>
</div><!--//footer_l-->
<!--フッター中-->
<div class="footer_c">
<ul>
<?php dynamic_sidebar( 'footer_center' ); ?>
</ul>
</div><!--//footer_c-->
<!--フッター右-->
<div class="footer_r">
<ul>
<?php dynamic_sidebar( 'footer_right' ); ?>
</ul>
</div><!--//footer_r-->
<div class="clear"></div>
</div><!--//footer-in-->
<!--//PC-->
<?php } ?>
<p><small>&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
<p class="gush_link"><small><a href="http://gush.naifix.com/" rel="nofollow">WordPress Theme Gush</a></small></p>
</footer>
<!-- //footer -->
<?php wp_footer(); ?>
<!-- ページトップへ -->
<div id="page-top"><a href="#header">PAGE TOP ↑</a></div>
<!-- //ページトップへ-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/gush.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id))
{js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script type="text/javascript">
  window.___gcfg = {lang: 'ja'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</body>
</html>