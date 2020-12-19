<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>


	<div class="row m-2">
		<div class="col-sm-12 col-md-8">
			<div class="text-center mt-2 mb-2 pt-4">
				<h1 class="heading1">Today's Inspiration</h1>
				<p class="content">
					One day your life <br> 
					will flash before your eyes. <br> 
					Make sure it's worth watching. <br>
				</p>
				<p class="category">~ Gerard Way</p>
			</div>
		</div>

		<div class="col-sm-12 col-md-3">
			<div class="d-flex justify-content-center">
				<div class="mt-2 mb-2" style="width: 18rem">
					<form action="<?php echo '/index.php'; ?>" method="post" class="p-2">
							<h2>Login</h2>
							<div style="width: 60%; margin: 0px auto;">
								<?php include(ROOT_PATH . '/includes/errors.php') ?>
							</div>
							<div class="form-group">
								<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div> 
							<div class="read_article">
								<button class="btn btn-outline-primary" type="submit" name="login_btn">Sign in</button>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center">
		<div>
			<img 
				src="/static/images/anish-ghimire.jpg"
				class="rounded-circle"
				style="width: 150px; height: 150px" 
				alt="Anish Ghimire"
			/>
			<h1 class="heading1"> Anish Ghimire </h1>
			<h2 class="content"> 
				Hi! I am Anish Ghimire. <br />
			</h2>
			<p class="content">
				I am a Full Stack Web Developer based in Kathmandu, Nepal. <br />
				<br />
				I describe myself as a passionate developer who loves coding and the web platform. <br />
				I take great pride in my work, and I always try my best with every project I work on. <br />
				<br />
				When I am not at a computer, I enjoy coffee with my friends. <br />

				And sometimes when I am all alone I try to write. 
			</p>
		</div>
	</div>
<?php } ?>