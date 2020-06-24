<footer id="footer" class="footer">
  <div class="container">
  <div class="row justify-content-between">
    <div class="col-md-3">
      <div class="copy">
        <p>Copyright &#169 <?php echo date(Y) ?></p>
        <a href="#" class="footer-policy-link">Политика конфиденциальности</a>
        <small><?php the_field('low_text', 9); ?></small>
      </div>
    </div>
    <div class="col-md-2 col-6">
    <?php wp_nav_menu(array(
          'container' => 'ul',
          'container_class' => 'footer_menu',
          'menu_class' => 'footer_menu',
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
    <div class="col-md col-6">
      <ul class="footer_menu">
      <?php $args = array(
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 0,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '1',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => null,
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
);


	wp_list_categories( $args );
?>
      </ul>
    </div>
    <div class="col-md 3">
      <div class="footer-contacts">
        <p class="footer-contacts_phone"><?php the_field('phone_number', 9); ?></p>
        <p class="footer-contacts_address"><?php the_field('address', 9); ?></p>
        <p class="footer-contacts_email"><?php the_field('email', 9); ?></p>
        <div class="footer-social-links">
          <ul>
            <li><a href="<?php the_field('fb', 9); ?>"><i class="icon-facebook"></i></a></li>
            <li><a href="<?php the_field('instagram', 9); ?>"><i class="icon-instagram"></i></a></li>
            <li><a href="<?php the_field('vk', 9); ?>"><i class="icon-vkontakte"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  <a href="#header" class="to-top"></a>
  <!-- /.container -->
</footer>
<div class="modal">
  <div class="modal-content">
    <div class="close">&times;</div>
    <h4>Заполните поля</h4>
    <p>Мы свяжемся с вами в ближайшее время</p>
    <div class="modal-form">
      <form action="">
        <input type="text" placeholder="Ваше имя">
        <input type="text" placeholder="Ваш телефон">
        <button type="submit" class="btn btn-primary modal-form_btn">Отправить заявку</button>
        <small>
          Нажимая кнопку, даю согласие на <a href="#">обработку персональных данных</a>
        </small>
      </form>
    </div>
  </div>
</div> 
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
<!--  <script src="assets/js/main.js" type='text/javascript'></script>
 -->  <?php wp_footer(); ?>

</body>
</html>