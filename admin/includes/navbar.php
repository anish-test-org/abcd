<nav class="navbar navbar-expand navbar-light bg-light">
	<a class="navbar-brand" href="/">AnishG</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard.php"># <span class="sr-only">(current)</span></a>
      </li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php
						echo $_SESSION['user']['username']
					?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/logout.php">Logout</a>
        </div>
      </li>
		</ul>
	</div>
</nav>
