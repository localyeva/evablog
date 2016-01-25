<!--sub-->
<div id="sub">
<div class="side_ad">
<aside>
<?php dynamic_sidebar( 'side-ad' ); ?>
</aside>
</div>

<div class="side_contents">
<ul>
<?php dynamic_sidebar( 'side-widget' ); ?>
</ul>
</div><!--//side_contents-->

<?php if(is_home()): ?>
<?php else: ?>
<div class="side_contents">
<h4>NEW エントリー</h4>
<?php
$args = array(
    'posts_per_page' => 10,
);
$st_query = new WP_Query($args);
?>

<?php if( $st_query->have_posts() ): ?>
<?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
<div class="side_new">
<div class="side_thumb"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
<?php the_post_thumbnail( 'thumb100' ); ?>
<?php else: // サムネイルを持っていないときの処理 ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
<?php endif; ?></a></div>
<div class="side_title"><?php echo get_post_time('Y.m.d D'); ?><br /><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
</div><!--//side_new-->
<div class="clear"></div>
<?php endwhile; ?>
<?php else: ?>
<p>記事はありませんでした</p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div><!--//side_contents-->
<?php endif; ?>

</div><!--//sub-->