
<?php  include('../config.php'); ?>
<?php
	if($_SESSION['user']['role'] != 'Admin') {
		header("Location: /");
	} else {
?>
<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Anish Ghimire | Dashboard</title>
	</head>
<body>
	<div>
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
	<div class="pt-3">
		<h5 class="text-center">
			Namaste!! <?php echo $_SESSION['user']['username'] ?>.
			This world completely belongs to you.
		</h5>
		<div class="row ml-3 mr-3">
			<div class="col-12 col-sm-6 col-md-4">
				<div class="card">
					<div class="card-body">
						<h6 class="card-subtitle mb-2 text-muted">43 Published Posts</h6>
						<a href="posts.php" class="card-link">View Posts</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4">
				<div class="card">
					<div class="card-body">
						<h6 class="card-subtitle mb-2 text-muted">43 Registered Users</h6>
						<a href="users.php" class="card-link">View Users</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4">
				<div class="card">
					<div class="card-body">
						<h6 class="card-subtitle mb-2 text-muted">43 Published Comments</h6>
						<a href="posts.php" class="card-link">View Comments</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
</body>
</html>
		<?php }?>