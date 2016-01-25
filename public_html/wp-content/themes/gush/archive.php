<?php get_header(); ?>

<div id="contents"><!-- contentns -->
<div id="main">
<div id="entry_body">

<article>
<header>
<h2><?php if( is_category() ) { ?>
<?php single_cat_title(); ?>
<?php } elseif( is_tag() ) { ?>
<?php single_tag_title(); ?>
<?php } elseif( is_tax() ) { ?>
<?php single_term_title(); ?>
<?php } elseif (is_day()) { ?>
<?php echo get_the_time('Y年m月d日'); ?>
<?php } elseif (is_month()) { ?>
<?php echo get_the_time('Y年m月'); ?>
<?php } elseif (is_year()) { ?>
<?php echo get_the_time('Y年'); ?>
<?php } elseif (is_author()) { ?>
<?php echo esc_html(get_queried_object()->display_name); ?></h1>
<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
ブログアーカイブ
<?php } ?>の記事一覧</h2>
</header>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!--ループ開始-->

<div class="home_area">

<section>
<div class="thumb_box">
<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
<?php
$title= get_the_title();
the_post_thumbnail(array( 150,150 ),
array( 'alt' =>$title, 'title' => $title)); ?>
<?php else: // サムネイルを持っていないときの処理 ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="150" height="150" />
<?php endif; ?>
</a>
</div><!--//thumb_box-->

<div class="entry_box">
<?php the_time('Y.m.d') ?>
<h3 class="new_entry_title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<p class="date-time">
<?php the_category(', ') ?> <?php the_tags('', ', '); ?>
</p>
</div>

<div class="clear"></div>
</section>

</div><!--//home_area-->

<?php endwhile; else: ?>
<p>記事がありません</p>
<?php endif; ?>
</article>

<!--ページナビ-->
<div class="pager">
	<?php global $wp_rewrite;
	$paginate_base = get_pagenum_link(1);
	if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
		$paginate_format = '';
		$paginate_base = add_query_arg('paged','%#%');
	}
	else{
		$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
		user_trailingslashit('page/%#%/','paged');;
		$paginate_base .= '%_%';
	}
	echo paginate_links(array(
		'base' => $paginate_base,
		'format' => $paginate_format,
		'total' => $wp_query->max_num_pages,
		'mid_size' => 4,
		'current' => ($paged ? $paged : 1),
		'prev_text' => '≪',
		'next_text' => '≫',
	)); ?>
</div>


</div><!--//entry_body-->
</div><!--//main-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>