<?php
  header("Content-Type: application/rss+xml; charset=utf-8");
  require_once('config.php');
  require_once('./includes/public_functions.php');
  echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
  echo "<rss xmlns:atom='http://www.w3.org/2005/Atom' version='2.0'>";
  echo "<channel>";
  echo "<title>Anish Ghimire - Blog</title>";
  echo "<link>http://www.anishghimire.com.np</link>";
  echo "<description>Anish Ghimire's Blog RSS FEED</description>";
  echo "<language>en-us</language>";
  $posts = getPublishedPosts();
  foreach ($posts as $post):
    echo "<item>";
      echo "<guid> http://anishghimire.com.np/post.php?post-slug=" .$post['slug'] ."</guid>";
      echo "<title>" .$post['title'] . "</title>";
      // echo "<description>". strip_tags(html_entity_decode($post['body'])) ."</description>";
      echo "<description> <![CDATA[ " . html_entity_decode($post['body']) . "]]></description>";
      date_default_timezone_set('Asia/Kathmandu');
      echo "<pubDate>" .date("D, d M Y h:i:s O", strtotime($post["created_at"])) ."</pubDate>";
      echo "<link>" .'http://anishghimire.com.np/post.php?post-slug=' .$post['slug'] ."</link>";
    echo "</item>";
  endforeach;
  echo "</channel>";
  echo "</rss>";
?>