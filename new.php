<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php $posts = getPublishedPosts(); ?>

<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>Anish Ghimire | Home </title>
</head>
<body>
    <?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<?php include( ROOT_PATH . '/includes/featured.php') ?>
    <?php include( ROOT_PATH . '/includes/footer.php') ?>