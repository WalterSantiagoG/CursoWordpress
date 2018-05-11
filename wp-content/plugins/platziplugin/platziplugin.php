<?php
/*
Plugin Name:  Platzi plugin
Plugin URI:   http://localhost/CursoWordpress/plugins/platziplugin
Description:  Plugin para el CPT de viaje
Version:      1.0
Author:       WalterSantiago
Author URI:   https://waltersantiago.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  platziplugin
Domain Path:  /languages
*/

//Al activar el plugin y tener esta function se crea el rol y luego podemos desinstalar el plugin porque el rol queda en el sistema
function add_role_viajero()
{
    //Para realizar modificaciones en un rol por ejemplo agregarle que pueda publicar posts (publish_posts), debemos primero eliminar el rol, para luego volver a crearlo
    remove_role( 'viajero' );
    add_role(
        'viajero',
        'Viajero',
        [
            'read'               => true,
            'edit_posts'         => true,
            'upload_files'       => true,
            'publish_posts'      => true,
            //'delete_posts'     => true,
            //'edit_posts'       => true,
            edit_published_posts => true,
        ]
    );
}

//Creamos una pagina de opciones en el HTML
//https://developer.wordpress.org/plugins/administration-menus/top-level-menus/
function wporg_options_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "wporg_options"
            settings_fields('wporg_options');
            // output setting sections and their fields
            // (sections are registered for "wporg", each field is registered to a specific section)
            do_settings_sections('wporg');
            // output save settings button
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

function wporg_options_page()
{
    add_menu_page(
        'WPOrg',
        'WPOrg Options',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        '',
        20
    );
}
add_action('admin_menu', 'wporg_options_page');