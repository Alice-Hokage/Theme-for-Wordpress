<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<title>Push&push</title>
<?php wp_head(); ?>
</head>
<body id="header">
<div class="container">
  <div class="top-nav">
    <div class="row justify-content-between align-items-center">
      <div class="col-xl col-lg-4">
        <div class="logo"><a href="#footer">Push&push</a></div>
      </div>
      <!-- /.col-md -->
      <div class="col-xl col-lg-8">
        <button class="top-nav_btn">
          <i class="icon-menu"></i>
        </button>
        <?php wp_nav_menu(array(
          'container' => 'ul',
          'container_class' => 'top-nav_menu',
          'menu_class' => 'top-nav_menu',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          'after' => '',
          'before' => '',
          'link_before' => '',
          'link_after' => '',
          'items_wraps' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
          'depth' => 0,
          'walker' => '',
        ) ); ?>
      </div>
      <!-- /.col-md -->
    </div>
    <!-- /.row -->
    <a href='#footer' class="to-both"></a>
  </div>
  <!-- /.top-nav -->