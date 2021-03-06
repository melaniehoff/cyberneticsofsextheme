<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/dll.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.1.5.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/moment.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/app.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;700&display=swap" rel="stylesheet">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('template_directory'); ?>/img/box.ico">
		<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/box.ico" />
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_directory'); ?>/img/box.ico">
		<link rel="manifest" href="/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">


		<!-- Primary Meta Tags -->
<title>Cybernetics of Sex</title>
<meta name="title" content="Cybernetics of Sex">
<meta name="description" content=""> 

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="http://cyberneticsofsex.melaniehoff.com">
<meta property="og:title" content="Cybernetics of Sex">
<meta property="og:description" content="">
<meta property="og:image" content="<?php echo get_bloginfo('template_directory'); ?>/img/meta.png">

<!-- TODO -->
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="http://cyberneticsofsex.melaniehoff.com">
<meta property="twitter:title" content="Cybernetics of Sex">
<meta property="twitter:description" content="">
<meta property="twitter:image" content="<?php echo get_bloginfo('template_directory'); ?>/img/meta.png">
</head>

<body>

	<div class="header-wrapper">
        <?php
            $accordionType = 'Tutorial';
            $accordionUrl = '/lessons';
            $accordionPosition = 'top-left';
            $accordionTitle = 'Lessons';
            include(locate_template('accordion.php'));
        ?>
        <?php
            $accordionTitle = 'Blog';
            $accordionType = 'Blog';
            $accordionUrl = '/blog';
            $accordionPosition = 'top-right';
            include(locate_template('accordion.php'));
        ?>
	</div>

	<div class="header-wrapper-mobile broider ">
		<a class="header-link" href="/">Home</a>
			<a class="header-link" href="/lessons">Lessons</a>
			<a class="header-link" href="/blog">Blog</a>
			<a class="header-link" href="/library">Library</a>
	</div>
