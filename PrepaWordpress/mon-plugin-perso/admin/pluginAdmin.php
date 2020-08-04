<div class="wrap">
  <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
  <form action="options.php" method="post">
    <?php
    settings_errors();

    settings_fields( 'monpluginperso' );

    do_settings_sections( 'monpluginadmin' );

    submit_button('Enregistrer');
    ?>
  </form>
</div>