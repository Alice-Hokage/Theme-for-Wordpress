
<?php get_header(); ?>
  <div class="row">
    <div class="col-lg-4">
     <?php get_sidebar(); ?>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-lg-8">
      <div class="content">
        <h2><?php 
        if( is_category() ) 
        {$cat_name = get_queried_object()->name;
          $cat_slug = get_queried_object()->slug;
          echo $cat_name;
        }
        ?>
        </h2>
        
          <div class="row">

          <?php
$posts = get_posts( array(
	'numberposts' => 0,
	'category_name'    => $cat_slug,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, 
) );

foreach( $posts as $post ){ setup_postdata($post);
    ?>
    <div class="col-md-6">
              <div class="object-card">
                <h2 class="object-card_title"><?php the_title(); ?></h2>
                <?php the_excerpt() ?>
                <p class="object-card_price"><?php the_field('object_price')?></p>
                <a href="#" class="btn object-card_btn btn-primary">Buy</a>
              </div>
            </div>
    <?php
}

wp_reset_postdata();
        ?>
            
            
          </div>
      </div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  <!-- /.rov -->

</div>

<?php get_footer(); ?>