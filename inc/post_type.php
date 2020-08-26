<?php
// Our custom post type function
function create_posttype() {

    register_post_type( 'kqxs',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Thêm kết quả sổ số' ),
                'singular_name' => __( 'Thêm kết quả sổ số' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'add_kqxs'),
            'show_in_rest' => true,
            'supports'            => array( 'title' ),
        )
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
