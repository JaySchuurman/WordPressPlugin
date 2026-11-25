
<?php

class Pokecard_Display
{
    public function __construct()
    {
        // 1. Footer aanpassen
        add_action('wp_footer', [$this, 'add_footer_message']);

        // 2. Paginatitel aanpassen
        add_filter('document_title_parts', [$this, 'change_document_title']);

        // 3. JavaScript laden
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);

        // 4. Berichtinhoud aanpassen
        add_filter('the_content', [$this, 'add_pokemon_message']);
    }

    // Footer aanpassen
    public function add_footer_message()
    {
        echo '<p style="text-align: center;">PokéCard Generator - Powered by PokéAPI</p>';
    }

    // Paginatitel aanpassen
    public function change_document_title($title)
    {
        $title['title'] = 'PokéCard Generator';
        return $title;
    }

    // JavaScript laden
    public function enqueue_scripts()
    {
        wp_enqueue_script(
            'pokecard-script',
            POKECARD_URL . 'assets/js/pokecard.js',
            [],
            POKECARD_VERSION,
            true
        );
    }

    // Berichtinhoud aanpassen
    public function add_pokemon_message($content)
    {
        $content .= '<p>Gotta catch them all I guess...</p>';

        return $content;
    }
}
