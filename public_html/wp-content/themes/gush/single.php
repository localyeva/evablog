<?php get_header(); ?>

<div id="contents"><!-- contentns -->
<div id="main">
<div id="entry_body">
<article>
<header>
<div class="pankuzu">
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
</div><!--//pankuzu-->

<!--ループ開始-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 id="single_title"><?php the_title(); ?></h1>
<div class="meta_box">
<p>公開日：<time class="entry-date" datetime="<?php the_time('c') ;?>"><?php the_time('Y/m/d') ;?></time>&nbsp;<?php if ($mtime = get_mtime('Y/m/d')) echo ' 最終更新日：' , $mtime; ?></p>
</div><!--//meta_box-->
</header>

<?php the_content(); ?>
<?php wp_link_pages(); ?>

<div id="cat_tag"><span><?php the_category(' ') ?></span><span><?php the_tags(' ', ' ', ' '); ?></span></div>

<div id="entry_footer_ad">
<aside>
<?php dynamic_sidebar( 'efa_l' ); ?>
<?php dynamic_sidebar( 'efa_r' ); ?>
<div class="clear"></div>
</aside>
</div><!--//ad-->
<footer>
<?php get_template_part('sns');?>
</footer>
  <?php endwhile; else: ?>
  <p>記事がありません</p>
  <?php endif; ?>
<!--ループ終了-->

</article>

<div id="relations">
<h3>関連記事-こちらもどうぞ</h3>
<ul class="cleafix">
<?php
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
'post__not_in' => array($post -> ID),
'posts_per_page'=> 8,
'category__in' => $category_ID,
'orderby' => 'rand',
);
$st_query = new WP_Query($args); ?>
          <?php
if( $st_query -> have_posts() ): ?>
          <?php
while ($st_query -> have_posts()) : $st_query -> the_post(); ?>


<li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
<?php echo get_the_post_thumbnail($post->ID, 'thumb110'); ?>
<?php else: // サムネイルを持っていないときの処理 ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="110" /><?php endif; ?></a><br />
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
<?php else: ?>
<li>記事はありませんでした</li>
<?php endif; wp_reset_postdata(); ?>
</ul>
</div><!--//relations-->
<div class="clear"></div>

<!--コメント-->
<?php comments_template(); ?>
<!--//コメント-->

<div id="page_pn" class="clearfix">
<dl>
      <?php
        $prev_post = get_previous_post();
        if (!empty( $prev_post )): ?>
       <dt>PREV：</dt><dd><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a></dd>
      <?php endif; ?>
      <?php
        $next_post = get_next_post();
        if (!empty( $next_post )): ?>
         <dt>NEXT：</dt><dd><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a></dd>
      <?php endif; ?>
</dl>
</div><!--//page_pn-->

</div><!--//entry_body-->
</div><!--//main-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>