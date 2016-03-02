<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="wrapper">
	<header class="h-page">
		<div class="container-fluid">
			<div class="row">
				<div class="logo"><?php bloginfo( 'name' ); ?></div>
				<ul class="follow-links">

					<?php
					$query = new WP_Query( array(
						'post_type' => 'follow_links',
						'orderby' => 'id',
						'order' => 'ASC'
					) ); ?>

					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li><a class="<?php the_field( 'icon_class' ); ?>" href="<?php the_field( 'link' ); ?>"></a></li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
		</div>
		<nav id="main-nav">
			<div class="container">
				<div class="row">
					<?php
					$args = [ 'theme_location' => 'primary' ];
					wp_nav_menu( $args ); ?>
					<form name="search-form" action="#" method="GET">
						<div class="search-input">
							<i id="icon-search" class="icon-search"></i>
							<input id="search-input" type="search" name="search-request" placeholder="search" >
						</div>
					</form>
				</div>
			</div>
		</nav>
	</header>


