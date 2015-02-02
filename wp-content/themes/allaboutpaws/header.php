<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		

	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed (<?php bloginfo('language'); ?>)" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lte IE 8]>
    	<style>
            .slider6 .ribTxt span {
                -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.70710678, M12=0.70710678, M21=-0.70710678, M22=0.70710678,sizingMethod='auto expand')";
                color:#fff;
            }
            .slider6 .ribTxt {top:-37px; left:15px; }
    	</style>
    <![endif]-->
	<!--Stylesheets-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wp.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
	
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
<div class="topBar"><div class="backg"></div><a href="javascript:void(0)" class="bookTable" >Book an Event</a></div>
<div id="header">
    <div class="container">

        <div class="logoContainer">
            <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt=""></a>
        </div>

        <div class="topData">
            <ul class="social">
                <?php if (of_get_option('facebook_username')): ?>
                <li><a href="https://www.facebook.com/<?php echo of_get_option('facebook_username'); ?>" target="_blank" class="fb">Facebook</a></li>
                <?php endif; ?>
                <?php if (of_get_option('twitter_username')): ?>
                <li><a href="https://twitter.com/<?php echo of_get_option('twitter_username'); ?>" target="_blank" class="twit">Twitter</a></li>
                <?php endif; ?>
                <li><a href="/contact-us" class="mail">E-mail</a></li>
            </ul>

            <address>
                <?php if (of_get_option('company_address')): ?>
                    <?php echo nl2br(of_get_option('company_address')); ?>
                <?php endif; ?>
                <?php if (of_get_option('company_telephone')): ?>
                    <?php echo of_get_option('company_telephone'); ?>
                <?php endif; ?>
            </address>

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- container end -->
</div>

<!-- header end -->
<div id="menuContainer">
    <div class="container">
        <?php if (has_nav_menu('primary-menu')): 
							wp_nav_menu( array( 'container' => false, 'menu_class' => 'mainMenu', 'theme_location' => 'primary-menu', 'fallback_cb' => 'display_home' ) );
					else: ?>
						<ul class="mainMenu">
							<li><a href="<?php echo home_url(); ?>/">Home</a></li>
							<?php wp_list_pages('title_li=' ); ?>
					    </ul><!-- end .menu -->
 					<?php endif;	?>
        <div class="login">
          <a href="javascript:void(0)" class="bookTable" id="bkTable"></a>
        </div>
      <div class="clearfix"></div>
    </div>
</div>
<div id="container" class="container<?php if (IS_FLUID) echo '-fluid' ?>">