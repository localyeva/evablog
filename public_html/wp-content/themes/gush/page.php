<?php get_header(); ?>

<div id="contents"><!-- contentns -->
<div id="main">
<div id="entry_body">
<article>
<header>
<?php if(is_home()): ?>
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
<?php else: ?>
<?php endif; ?>

  <!--ループ開始-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 id="single_title"><?php the_title(); ?></h1>
</header>

<?php the_content(); ?>
<?php wp_link_pages(); ?>

  <?php endwhile; else: ?>
  <p>記事がありません</p>
  <?php endif; ?>
  <!--ループ終了-->

</article>

</div><!--//entry_body-->
</div><!--//main-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>