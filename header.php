<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>
	<!-- 顶部导航栏 -->
	<nav class="navigation">
		<?php wp_nav_menu(); ?>
</nav>
	<!-- 搜索框 -->
	<div class="search">
		<form class="search-group" role="search" method="get"  action="<?php echo esc_url(home_url('/')); ?>">
			<input type="search" placeholder="搜索关键字" value="<?php echo get_search_query(); ?>" name="s" />
			<input type="submit" value="搜索" />
		</form>
	</div>