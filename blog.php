
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php $posts = getPublishedPosts(); ?>

<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>Anish Ghimire | Home </title>
</head>
<body>
	<div class="">
    <?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<div class="content">
			<div class="d-flex justify-content-between">
				<div class="ml-3">
					<h1 class="heading1">All Articles</h1>
				</div>
				<div class="mr-3">
					<a
						href="./feed.php"
					>
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-rss" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
							<path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
							<path fill-rule="evenodd" d="M2.5 3.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1z"/>
						</svg>
					</a>
				</div>				
			</div>
			<hr>
				<div class="row ml-1 mr-1">
					<?php foreach($posts as $post): ?>
						<div class="col-sm-12 col-md-4 mb-2">
							<?php if (isset($post['topic']['name'])): ?>
								<p class="category"> <?php echo $post['topic']['name'] ?> </p>
							<?php else: echo 'N/A'; ?>
							<?php endif ?>
							<h1 class="heading1"
								data-toggle="tooltip" 
								data-placement="top"
								title="<?php echo $post['title']?>"
							> 
								<a href="post.php?post-slug=<?php echo $post['slug']; ?>">
									<?php echo $post['title'] ?>
								</a>
							</h1>
							<p
								class="content"
							> 
								<div class="text-truncate">
									
									<?php
										echo strip_tags(html_entity_decode($post['body']));
									?>
								</div>
							</p>
							<img 
								src="<?php echo '/static/images/' .$post['image']; ?>" 
								class="img-fluid"
								style="width: 100%; height: 200px;" 
								alt="<?echo $post['image']?>"
							/>
							<hr />
						</div>
					<?php endforeach ?>
				</div>
		</div>
		<?php include( ROOT_PATH . '/includes/footer.php') ?>
