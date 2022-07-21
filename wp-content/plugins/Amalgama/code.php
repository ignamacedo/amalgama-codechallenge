<?php 
/**
 * Plugin Name: Amalgama
 * Description: Code Challenge Amalgama
 * Version: 1.0.0
 * Author: Ignacio Macedo
 */


function amalgama_add_settings_page() {
    add_options_page( 'Amalgama Config', 'Amalgama Config', 'manage_options', 'dbi-example-plugin', 'render_subsection' );
}


add_action( 'admin_menu', 'amalgama_add_settings_page' );

function render_subsection() {
    ?>
    <h1>Amalgama settings</h1>
    <form action="#" method="post">
        <?php 
        settings_fields( 'fields_page' );
        do_settings_sections( 'amalgama_challenge_plugin' ); ?>
        <input name="submit" class="button button-primary" type="submit" value="Save Changes" />
    </form>
    <?php
}

function amalgama_register_settings() {
    register_setting( 'fields_page', 'fields_page', '' );
    add_settings_section( 'fields_settings', '', '', 'amalgama_challenge_plugin' );

    add_settings_field( 'titles_extension', 'Titles Extension', 'titles_extension', 'amalgama_challenge_plugin', 'fields_settings' );
    
}
add_action( 'admin_init', 'amalgama_register_settings' );



function titles_extension() {
    $options = get_option( 'fields_page' );
    echo "<input id='titles_extension' name='fields_page' type='text'/>";
}

