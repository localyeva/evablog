<?php get_header(); ?>

<div id="content" class="clearfix">
  <div id="contentInner">
    <main>
      <article>
        <div class="post"> 
          <!--ぱんくず -->
          <div id="breadcrumb">
            <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo home_url(); ?>" itemprop="url"> <span itemprop="title">ホーム</span> </a> &gt; </div>
            <?php $postcat = get_the_category(); ?>
            <?php $catid = $postcat[0]->cat_ID; ?>
            <?php $allcats = array($catid); ?>
            <?php 
while(!$catid==0) {
    $mycat = get_category($catid);
    $catid = $mycat->parent;
    array_push($allcats, $catid);
}
array_pop($allcats);
$allcats = array_reverse($allcats);
?>
            <?php foreach($allcats as $catid): ?>
            <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo get_category_link($catid); ?>" itemprop="url"> <span itemprop="title"><?php echo get_cat_name($catid); ?></span> </a> &gt; </div>
            <?php endforeach; ?>
          </div>
          <!--/ ぱんくず -->
          
          <section> 
            <!--ループ開始 -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="entry-title">
              <?php the_title(); //タイトル ?>
            </h1>
            <div class="blogbox">
              <p><span class="kdate"><i class="fa fa-calendar"></i>&nbsp;
                <time class="entry-date" datetime="<?php the_time('c') ;?>">
                  <?php the_time('Y/m/d') ;?>
                </time>
                &nbsp;
                <?php if ($mtime = get_mtime('Y/m/d')) echo ' <i class="fa fa-repeat"></i>&nbsp; ' , $mtime; ?>
                </span> 
          <!--タグ 開始-->
            <p class="tagst"><i class="fa fa-tags"></i>&nbsp;-
            <?php the_category(', ') ?>
            <?php the_tags('', ', '); ?>
            </p>
          <!--タグ 終了-->
            </p>
            </div>

	    


            <?php the_content(); //本文 ?>
          </section>
          <!--/section-->

          <?php wp_link_pages(); ?>
              
      <div style="padding:1px 0px;">
            <?php get_template_part('ad'); //アドセンス読み込み ?>
            <?php if(is_mobile()) { //スマホの場合 ?>
            <?php } else { //PCの場合 ?>
            <div class="smanone" style="padding-top:10px;">
              <?php get_template_part('ad'); //アドセンス読み込み ?>
            </div>
            <?php } ?>
          </div>
          <?php endwhile; else: ?>
          <p>記事がありません</p>
          <?php endif; ?>
          <!--ループ終了-->


<?php get_template_part('sns'); //ソーシャルボタン読み込み ?>
  

	<div class="call-to-action">
        <p style="color: #ffffff;margin-left: 10px;margin-right: 10px;margin-bottom: 0px;"> ベトナムでのオフショア開発、BPOに興味を持った方、もっと詳しい内容を知りたい方はEVOLABLE ASIAのホームページをご覧ください。</p>
<span style="color: #ffffff;"><span style="font-size: 26px;">
<div class="title"><a href="http://evolable.asia/" onclick="_gaq.push([
  '_trackEvent',
  'singlepost_linkclick',
  'http://evolable.asia/',
  'content',
  10,
  true
]);"><img src="http://eva-blog.evolable.asia/wp-content/uploads/2014/10/banner342534-2.jpg" alt="HPLink2" ></a></div>
</span></span>
</div>

         <!--投稿者紹介-->
          <?php echo do_shortcode("[starbox]"); ?>

          <!--関連記事 -->
　　　　　　<?php wp_related_posts()?>
       
          

          <!--ページナビ-->
          <div class="p-navi clearfix">
            <dl>
              <?php
        $prev_post = get_previous_post();
        if (!empty( $prev_post )): ?>
              <dt>PREV </dt>
              <dd><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a></dd>
              <?php endif; ?>
              <?php
        $next_post = get_next_post();
        if (!empty( $next_post )): ?>
              <dt>NEXT </dt>
              <dd><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a></dd>
              <?php endif; ?>
            </dl>
          </div>
          <br>
          <!--facebook-->
          <iframe src="//www.facebook.com/plugins/likebox.php?  href=https%3A%2F%2Fwww.facebook.com%2Fevolable.asia.eva%3Ffref%3Dts&amp;width=500px&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=445550542212549" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:290px;" allowTransparency="true"></iframe>  <//ソーシャルボックス読み込み ?>

        </div>
        <!--/post--> 
      </article>
    </main>
  </div>
  <!-- /#contentInner -->
  <?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>