<!-- ログインチェック -->
<?php 
if( is_user_logged_in() ) {
  // echo("ログインしてる");
  wp_safe_redirect( home_url('/') );
  exit;
} else {
  // echo("ログインしてない");
}
?>

<?php get_header(); ?>

<body>
  <header class="sub-header">
    <a href="<?php echo home_url(); ?>/login">
      <div class="sub-header__figure"><img src="<?php echo get_template_directory_uri(); ?>/img/rakuhachi-logo.png" alt="" 楽八のロゴ></div>
    </a>
  </header>
  <!-- news -->
  <section class="news">
    <div class="news__inner inner">
    <div class="news-content _login">
				<div class="news-content__inner _login">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <!-- article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

              </article>
              <!-- /article -->

            <?php endwhile; ?>

          <?php else : ?>

            <!-- article -->
            <article>

              <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

            </article>
            <!-- /article -->

          <?php endif; ?>
        </div>
      </div>
  </section><!-- news -->

  <!-- footer -->
  <footer class="footer-login">
    <div class="footer__inner inner">
      <div class="footer-content">
        <div class="footer-logo__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="楽八ロゴ">
        </div>
        <div class="footer-text">
          <p class="footer-text__above">主催：八の会</p>
          <p class="footer-text__below">名古屋・中部をもっともっと格好良い街にしよう<br>
            ビジネスを盛り上げよう！を掛け声にしている地域コミュニティ。</p>
        </div>
      </div>
      <div class="footer-box">
        <div class="footer-logo2__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="楽八ロゴ">
        </div>
        <p class="footer-text__lead">
          後援：名古屋市
        </p>
      </div>
    </div>
  </footer><!-- /footer -->
</body>

</html>