<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<div class="row">
  <div class="col-lg-4">
  <?php get_sidebar(); ?>
  </div>
  <!-- /.col-md-4 -->
  <div class="col-lg-8">
      <h2>О нас</h2>
      <?php the_content() ?> 
      
      <a href="/about.html" class="btn btn-primary">Узнать больше о нас</a>
      
  </div>
  <!-- /.col-md-8 -->
</div>
<!-- /.rov -->
</div>


<?php get_footer(); ?>
