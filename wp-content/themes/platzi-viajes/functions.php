<?php

//Lo borramos de aquí, porque ya creamos un plugin con esta function
/*function add_role_viajero()
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
}*/
 
// add the simple_role
//add_action('init', 'add_role_viajero');

//Custom Post Types por codigo
function viajes_init() {
    $labels = array(
        'name'              => _x( 'Viajes', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Viajes', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis viajes', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Viajes', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', 'viaje', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nuevo viaje', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nuevo viaje', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar viaje', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver viaje', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos los viajes', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar viajes', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Viajes padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado viajes.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado viajes en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_rest'      => true,//Se agrega esta línea para cuando consultemos la API REST WP http://localhost/CursoWordpress/wp-json/wp/v2/viaje no aparezca status 404, así como mostramos visualmente nuestros campos personalizados, de igual forma se muestra aquí en la API
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'viaje' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-admin-multisite',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'viaje', $args );
}

add_action( 'init', 'viajes_init' );

/* CPT rutas*/ 

function rutas_init() {
    $labels = array(
        'name'              => _x( 'Rutas', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Rutas', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis rutas', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Rutas', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nueva', 'ruta', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nueva ruta', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nueva ruta', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar ruta', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver ruta', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todas las rutas', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar rutas', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Rutas padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado rutas.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado rutas en la papelera', 'your-plugin-textdomain' ),
    );
    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'ruta' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-admin-multisite',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );
    register_post_type( 'ruta', $args );
}
add_action( 'init', 'rutas_init' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_viaje-2',
		'title' => 'Viaje',
		'fields' => array (
			array (
				'key' => 'field_5af506322f90b',
				'label' => 'Destino',
				'name' => 'destino',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5af504d8dadf0',
				'label' => 'Vacunas obligatorias',
				'name' => 'vacunas_obligatorias',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5af5051fd601f',
				'label' => 'Vacunas recomendadas',
				'name' => 'vacunas_recomendadas',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5af5053b053a1',
				'label' => 'Transporte local',
				'name' => 'transporte_local',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5af50543053a2',
				'label' => 'Peligrosidad',
				'name' => 'peligrosidad',
				'type' => 'select',
				'choices' => array (
					'baja' => 'Baja',
					'media' => 'Media',
					'alta' => 'Alta',
					'muy alta' => 'Muy Alta',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5af505a8053a3',
				'label' => 'Moneda local',
				'name' => 'moneda_local',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'viaje',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

/* CPT (Custom Post type) RUTAS */
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_ruta',
		'title' => 'Ruta',
		'fields' => array (
			array (
				'key' => 'ruta_dificultad',
				'label' => 'Dificultad',
				'name' => 'dificultad',
				'type' => 'select',
				'choices' => array (
					'baja' => 'Baja',
					'media' => 'Media',
					'alta' => 'Alta',
					'experto' => 'Experto',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'ruta_tiempo',
				'label' => 'Tiempo',
				'name' => 'tiempo',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ruta',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

//REST API muestre los campos personalizados en nuestra app
add_action('rest_api_init', 'register_custom_fields');

function register_custom_fields()
{
    register_rest_field(
        'viaje',
        'destino',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'vacunas_obligatorias',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'vacunas_recomendadas',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'transporte_local',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'peligrosidad',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'moneda_local',
        array(
            'get_callback' => 'show_fields'
        )
    );

}

function show_fields( $object, $field_name, $request ) {
  return get_post_meta( $object[ 'id' ], $field_name, true );
}