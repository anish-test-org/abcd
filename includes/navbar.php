<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?= ($activePage === index) ? 'active' : ''; ?>">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= ($activePage === blog) ? 'active' : ''; ?>">
        <a class="nav-link" href="/blog.php">Blog</a>
      </li>
      <li class="nav-item <?= ($activePage === about_me) ? 'active' : ''; ?>">
        <a class="nav-link" href="/about_me.php">About Me</a>
      </li>
      <li class="nav-item <?= ($activePage === education) ? 'active' : ''; ?>">
        <a class="nav-link" href="/education.php">Education</a>
      </li>
      <li class="nav-item <?= ($activePage === projects) ? 'active' : ''; ?>">
        <a class="nav-link" href="/projects.php">Projects</a>
      </li>
      <?php
        if($_SESSION['user']['role'] == 'Admin') {
          echo "<li class='nav-item'> <a class='nav-link' href='/admin/dashboard.php'>Dashboard</a></li>";
        }
      ?>
      <?php
        if($_SESSION['user']['role'] == 'Author') {
          echo "<li class='nav-item'> <a class='nav-link' href='/admin/create_post.php'>Create Post</a></li>";
        }
      ?>
    </ul>
  </div>
</nav>
