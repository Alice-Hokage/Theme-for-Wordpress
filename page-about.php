<?php
/*
Template Name: О нас
*/
?>
<?php get_header(); ?>
  <div class="row">
    <div class="col-lg-4">
     <?php get_sidebar(); ?>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-lg-8">
      <div class="content">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  <!-- /.rov -->

</div>

<?php get_footer(); ?>