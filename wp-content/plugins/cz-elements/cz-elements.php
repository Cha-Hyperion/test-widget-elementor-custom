<?php
/*
Plugin Name: czElements
Description: Ajout de widgets personnalisés à Elementor
Author: Charlene Zybala
*/

//Test de sécurité
if (!defined('WPINC')) {
    http_response_code(404);
    exit;
}

define('CZELEMENTS_PLUGIN_FILE', __FILE__);

require plugin_dir_path(CZELEMENTS_PLUGIN_FILE) . 'vendor/autoload.php';

$plugin = new czElements\Plugin;
$plugin->run();