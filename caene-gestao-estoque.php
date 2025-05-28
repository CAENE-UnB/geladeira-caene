<?php
/**
 * Plugin Name: Caene - Gestão de Estoque
 * Description: Sistema de gestão de estoque com QR Code para pagamentos e personalização de interface.
 * Version: 1.0
 * Author: Caene
 * Text Domain: caene-gestao-estoque
 */

// Evita acesso direto ao arquivo
if (!defined('ABSPATH')) {
    exit;
}

// Definições do plugin
define('CAENE_VERSION', '1.0');
define('CAENE_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CAENE_PLUGIN_URL', plugin_dir_url(__FILE__));

// Inclui os arquivos necessários
require_once CAENE_PLUGIN_DIR . 'includes/class-caene-activator.php';
require_once CAENE_PLUGIN_DIR . 'includes/class-caene-deactivator.php';
require_once CAENE_PLUGIN_DIR . 'includes/class-caene-loader.php';
require_once CAENE_PLUGIN_DIR . 'includes/class-caene.php';
require_once CAENE_PLUGIN_DIR . 'admin/class-caene-admin.php';
require_once CAENE_PLUGIN_DIR . 'public/class-caene-public.php';

// Ativação e desativação do plugin
function activate_caene() {
    require_once CAENE_PLUGIN_DIR . 'includes/class-caene-activator.php';
    Caene_Activator::activate();
}

function deactivate_caene() {
    require_once CAENE_PLUGIN_DIR . 'includes/class-caene-deactivator.php';
    Caene_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_caene');
register_deactivation_hook(__FILE__, 'deactivate_caene');

// Inicia o plugin
function run_caene() {
    $plugin = new Caene();
    $plugin->run();
}

run_caene();
