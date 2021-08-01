<html>

<head>
    <title>JSH | DEV</title>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/jquery.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/jquery-ui.min.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/bootstrap.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/js/navigation.js'; ?>">
    </script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<div id="site-navigation" class="main-navigation">
    <div class="hamburger" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
</div><!-- #site-navigation -->
<nav class="nav-main">
    <?php
    wp_nav_menu(
    array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'menu_class'      => 'menu-wrapper',
                'container_class' => 'primary-menu-container',
            )
);
?>
</nav>
<body>

    <div class="container">