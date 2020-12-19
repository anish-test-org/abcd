<?php $post = getFeaturedPost(); ?>
<div class="row m-1">
  <div class="col-sm-12 col-md-8">
    <img 
      src="/static/images/featured.webp" 
      class="img-fluid" 
      alt="Responsive image"
    />
  </div>

  <div class="col-sm-12 col-md-3">
    <div
      class="mt-3"
    >
      <div class="featured_category">
        <?php echo $post['topic']['name']?>
      </div>
      <h1 class="featured_heading">
        <?php echo $post['title'] ?>
      </h1>
      <p class="content justify-text"> 
        <?php echo substr(strip_tags(html_entity_decode($post['body'])),0,200); ?>  
        ...
      </p>
      <div
        class="read_article"
      >
        <a 
          href="post.php?post-slug=<?php echo $post['slug']; ?>"
          class="btn btn-outline-primary"
        >
          Read Article
        </a>
      </div>
    </div>
  </div>
</div>