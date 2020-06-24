<?php
/*
Template Name: Контакты
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
        <div class="contacts">
          <p class="contacts-phone">
            <img class="contacts-img" src="<?php bloginfo('template_directory') ?>/assets/img/phone-handset_icon-icons.com_48252.png" alt="phone">
            <?php the_field('phone_number', 9); ?></p>
          <p class="contscts-mail">
            <img class="contacts-img" src="<?php bloginfo('template_directory') ?>/assets/img/letter_icon-icons.com_67753.svg" alt="mail">
            <?php the_field('email', 9); ?></p>
          <p class="contacts-address"><?php the_field('address', 9); ?></p>
          <a href="/about.html" class="btn btn-primary contacts-btn">Задать вопрос</a>
          <div class="contacts-social-links">
            <ul>
            <li><a href="<?php the_field('fb', 9); ?>"><i class="icon-facebook"></i></a></li>
            <li><a href="<?php the_field('instagram', 9); ?>"><i class="icon-instagram"></i></a></li>
            <li><a href="<?php the_field('vk', 9); ?>"><i class="icon-vkontakte"></i></a></li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  <!-- /.rov -->

</div>

<?php get_footer(); ?>