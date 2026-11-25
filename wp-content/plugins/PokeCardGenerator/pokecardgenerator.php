
<?php
/**
 * Plugin Name: PokéCard Generator
 * Description: Generate random Pokémon cards using the PokéAPI.
 * Version: 1.0.0
 * Author: Jay Schuurman
 * Text Domain: pokecard-generator
 */

// Prevent direct access to this file.
if (!defined('ABSPATH')) {
    exit;
}

// Plugin constants
define('POKECARD_VERSION', '1.0.0');
define('POKECARD_PATH', plugin_dir_path(__FILE__));
define('POKECARD_URL', plugin_dir_url(__FILE__));

// Load plugin classes
require_once POKECARD_PATH . 'includes/class-pokecard-api.php';
require_once POKECARD_PATH . 'admin/class-pokecard-settings.php';
require_once POKECARD_PATH . 'public/class-pokecard-display.php';

// Initialize frontend display
new Pokecard_Display();
