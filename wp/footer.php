      </div>
      <footer class="site__footer footer">
        <div class="footer__contact footer__item">
          <p>E-mail: <?php echo get_option( 'wpschool_api_settings' )['wpschool_api_text_field_0']; ?></p>
          <p>Phone number: <?php echo get_option( 'wpschool_api_settings' )['wpschool_api_text_field_1']; ?></p>
        </div>
        <div class="footer__copyright footer__item">
          <p>© <?php echo get_bloginfo('name'); ?> <?php echo get_bloginfo('description'); ?></p>
        </div>
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>