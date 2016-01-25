<footer id="footer">
	<div class="address">
		 <a href="http://evolable.asia/"><img width="168" height="67" alt="EVOLABLE ASIA" src="http://eva-blog.evolable.asia/wp-content/uploads/2014/09/logo.png"></a>
		<p>4F Saigon Finance Center, <br>
  		   9 Dinh Tien Hoang Street, <br>
		   District 1, HCMC<br>
	           TEL +84-8(39111489)<br>
		   FAX +84-8(39118767)</p>
		 <!-- /address -->
	</div>
	<div class="description">
		<h3>EVOLABLE ASIAとは</h3>
  			<p>EVOLABLE ASIAは、開発コストや管理業務の<br>
			   コスト高に悩んでいる企業の課題を解決いたします。<br>
			   400人以上のベトナム人スタッフと海外でのオフショア開発、<br>
			   BPOノウハウを基に、ハイクオリティながらも安価なコストを実現。<br>
			   大幅なコストダウンを可能にします。</p>	
	</div>
	<div class="relation">
		<h3>ベトナムでのオフショア開発、BPOのご相談などお気軽にお問い合わせください。</h3>


<ul class="f-list-parent_01 f-list-parent is-fl">
<li class="f-list_01 f-list"><a target="_blank" href="http://evolable.asia/" class="f-link">お問い合わせ</a></li>

	</div>

	<h3>
		<?php if (is_home()) { ?>
		<?php bloginfo( 'name' ); ?>
    		<?php } else { ?>
		<?php wp_title(''); ?>
    		<?php } ?>
 	</h3>
  <p>
    <?php bloginfo('description'); ?>
  </p>
  <p class="copy">Copyright&copy;
    <?php bloginfo('name');?>
    ,
    <?php the_date('Y');?>
    All Rights Reserved.</p>
</footer>
</div>
<!-- /#wrapper --> 
<!-- ページトップへ戻る -->
<div id="page-top"><a href="#wrapper" class="fa fa-angle-up"></a></div>
<!-- ページトップへ戻る　終わり -->
<?php  wp_enqueue_script('base',get_bloginfo('template_url') . '/js/base.js', array()); ?>

<?php if(is_mobile()) { //PCのみ追尾広告のjs読み込み ?>
<?php } else { ?>
<?php  wp_enqueue_script('scroll',get_bloginfo('template_url') . '/js/scroll.js', array()); ?>
<?php } ?>

<?php wp_footer(); ?>

<div class="footer-wrap">
	<div class="footer-content">
<div class="address">
		<a href="http://evolable.asia/"><img width="215" height="67" alt="EVOLABLE ASIA" src="http://eva-blog.evolable.asia/wp-content/uploads/2014/09/EVA-logo21.png"></a>
		<p>EVOLABLE ASIA Co., Ltd<br>
                   Office : Ho Chi Minh,Hanoi(Viet Nam)<br>
                   TEL : +84-8(39111489)<br>
		   </p>
		
 
		 <!-- /address -->
	</div>
	<div class="description">
		<h3>EVOLABLE ASIAとは</h3>
  			<p>EVOLABLE ASIAは、開発コストや管理業務の
			   コスト高に悩んでいる企業の課題を解決いたします。
			   400人以上のベトナム人スタッフと海外でのオフショア開発、
			   BPOノウハウを基に、ハイクオリティながらも安価なコストを実現。
			   大幅なコストダウンを可能にします。
			
			</p>	
	</div>
	
	<div class="relation">
		<h3>お問い合わせ</h3>

                  <p>ベトナムでのラボ型オフショア開発や
                   BPOについてのご相談はお気軽に
                   お問い合わせください。<br>　　　　
<a href="http://evolable.asia/contact/" onclick="_gaq.push([
  '_trackEvent',
  'linkclick',
  'http://evolable.asia/contact/',
  'content',
  10,
  true
]);"><img src="http://eva-blog.evolable.asia/wp-content/uploads/2014/09/btn_contact.png" alt="HPLink"></a>
</p>	
	</div>
</div>
  
  <p class="copy">Copyright&copy;
    EVOLABLE ASIA Co., Ltd
    <?php the_date('Y');?>
    <span class="reserved"> All Rights Reserved.</span></p>
	
</div>
</body></html>