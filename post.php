<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title> Anish Ghimire - Blog - <?php echo $post['title'] ?> </title>
</head>
<body>
<div class="">
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<div class="mt-3">
		<div class="row ml-1 mr-1">
			<div class="col-md-8">
				<?php if ($post['published'] == false): ?>
					<span class="content">Sorry... This post has not been published</span>
					<?php else: ?>
						<div>
							<?php if (isset($post['topic']['name'])): ?>
								<p class="category"> <?php echo $post['topic']['name'] ?> </p>
							<?php else: echo 'N/A'; ?>
							<?php endif ?>
							<h1 class="heading1"> <?php echo $post['title'] ?> </h1>
							<div class="text-center">
								<img 
									src="<?php echo 'static/images/' . $post['image']; ?>" 
									class="img-fluid" 
									style="width: 100%; height: 300px; overflow: hidden;"
									alt="<?php echo $post['image']?>"
								/>
							</div>
						</div>
					<?php endif ?>
			</div>
		</div>
		<?php if ($post['published'] == true): ?>
			<div class="row ml-1 mr-1">
				<div class="col-sm-12 col-md-2 mt-3">
				  <h1 class="heading1"> Anish Ghimire </h1>
					<h2 class="content"> Web Developer </h2>
					<span class="text-muted content"> 
						Published:
						<?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					</span>
				</div>
				<div class="col-sm-12 col-md-10">
					<p class="content">
						<?php echo html_entity_decode($post['body']); ?>
					</p>
				</div>
			<div>
		<?php endif ?>
	</div>
</div>

<?php include( ROOT_PATH . '/includes/footer.php'); ?>