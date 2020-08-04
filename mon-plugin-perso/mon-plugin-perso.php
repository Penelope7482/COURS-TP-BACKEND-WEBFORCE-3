<?php
/**
 * Plugin Name: Mon Plugin Perso
 * Author: Nicolas Amini-Lamy
 * Text Domain: mon-plugin-perso
 * Domain Path: /languages
 */

/* Cette fonction ajoute un lien vers la 
 * page d'administration de notre plugin dans le menu du back office 
 */
function monpluginperso_addmenu() {
  add_menu_page(
      'Page d\'administration de mon plugin',
      'Mon plugin',
      'manage_options',
      plugin_dir_path(__FILE__) . 'admin/pluginAdmin.php',
      null,
      'dashicons-admin-tools',
      20
  );
}

/* Initialise les paramètres de notre plugin avec l'API SETTINGS */
function monpluginperso_settings_init() {
  //"Enregistre" les paramètres du plugin
  register_setting( 'monpluginperso', 'monpluginadmin_settings' );
  
  //Ajoute la section 1
  add_settings_section(
  'monpluginperso_section1',
  'Titres des pages',
  'monpluginperso_settings_callback',
  'monpluginadmin'
  );
  
  //Ajoute le champ "Suffixe"
  add_settings_field(
    'mon-plugin-perso_settings_suffixe',
    'Suffixe',
    'monpluginperso_settings_suffixe_cb',
    'monpluginadmin',
    'monpluginperso_section1',
    ['label_for' => 'suffixe']
  );
}

/* Cette fonction affiche le titre de la section 1 (la seule section) du formulaire" */
function monpluginperso_settings_callback() {
  echo '<p>Paramétrez ici le comportement de MonPluginPerso pour les titres de vos pages.</p>';
}

/* Cette fonction génère le DOM lié au champ "suffixe" de notre formulaire 
 * Elle interroge l'API OPTIONS afin de récupérer la valeur persistée en base dans la table wp_options
 */
function monpluginperso_settings_suffixe_cb() {
  //On récupère un tableau contenant toutes les options de notre plugin afin d'initialiser notre input
  $options = get_option( 'monpluginadmin_settings' );

  ?>
  <input type="text" 
         id="suffixe"
         name="monpluginadmin_settings[suffixe]" value="<?php echo sanitize_text_field($options['suffixe'])?>"/>
  
  <?php
}

/* Filtre les titres des pages */
function monpluginperso_the_title($post_title) {
  //Le filtre s'applique uniquement au titre des pages. Voir https://developer.wordpress.org/themes/basics/the-loop/
  if( !in_the_loop()) {
    return $post_title;              
  } 

  //On récupère le suffixe paramétré par l'utilisateur
  return $post_title .= " " . get_option( 'monpluginadmin_settings' )["suffixe"];
}


/* Désactivation du plugin */
function monpluginperso_deactivate() {
  unregister_setting( 'monpluginperso', 'monpluginadmin_settings' );
}

/* ------------------------------------------------------------------------  */
/* Enregistrement des actions, filtres et événements généraux liés au plugin */ 
/* ------------------------------------------------------------------------  */

add_action( 'admin_menu', 'monpluginperso_addmenu');
add_filter("the_title", "monpluginperso_the_title");
add_action( 'admin_init', 'monpluginperso_settings_init' );
register_deactivation_hook( __FILE__, 'monpluginperso_deactivate');