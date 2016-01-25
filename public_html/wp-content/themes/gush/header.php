<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<title><?php
global $page, $paged;
if(is_front_page()):
bloginfo('name');
elseif(is_single()):
wp_title('');
elseif(is_page()):
wp_title('');
elseif(is_archive()):
wp_title('|',true,'right');
bloginfo('name');
elseif(is_search()):
wp_title('-',true,'right');
elseif(is_404()):
echo'404 - ';
bloginfo('name');
endif;
if($paged >= 2 || $page >= 2):
echo'-'.sprintf('%sページ',
max($paged,$page));
endif;
?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/html5shiv.js" charset="UTF-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/css3-mediaqueries.js" charset="UTF-8"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="header"><!-- header -->
<header>
<div class="hgroup">
<h1 class="top_title"><a href="<?php echo home_url();?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
<h2 class="caption"><?php bloginfo('description'); ?></h2>
</div>
<div class="menubtn">MENU ▼</div>
<nav id="menu" class="togmenu">
<?php wp_nav_menu(); ?>
</nav>
</header>
</div><!-- //header -->