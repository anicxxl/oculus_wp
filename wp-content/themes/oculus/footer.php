<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <nav class="footer__menu menu">
        <a class="footer__menu-item menu-item" href="#accessories">
          shop
        </a>
        <a class="footer__menu-item menu-item" href="#games">
          games
        </a>
        <a class="footer__menu-item menu-item" href="#picture">
          metaverse
        </a>
        <a class="footer__menu-item menu-item" href="#mailing">
          contact us
        </a>
      </nav>

      <?php the_custom_logo(); ?>


      <ul class="footer__social-list" href="#banner">
        <li class="footer__social-list-item">
          <a class="footer__social-list-item-link" href="#">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/youtube-logo.svg" alt="youtube logo">
          </a>
        </li>

        <li class="footer__social-list-item">
          <a class="footer__social-list-item-link" href="#">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/facebook-logo.svg" alt="facebook-logo">
          </a>
        </li>

        <li class="footer__social-list-item">
          <a class="footer__social-list-item-link" href="#">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/social-logo.svg" alt="social logo">
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>