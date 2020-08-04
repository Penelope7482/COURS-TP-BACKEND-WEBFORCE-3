<?php

// Protection du script : il ne sera exécuté que dans le cadre d'une désinstallation via l'IHM.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

error_log("plugin désinstallé via script uninstall");