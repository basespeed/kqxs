<?php
add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'test_metabox',
        'title'         => __( 'Kết quả sổ xố', 'cmb2' ),
        'object_types'  => array( 'kqxs', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giải đặc biệt', 'cmb2' ),
        'id'         => 'giai_db',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );


    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giải nhất', 'cmb2' ),
        'id'         => 'giai1',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giải hai', 'cmb2' ),
        'id'         => 'giai2',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giải ba', 'cmb2' ),
        'id'         => 'giai3',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giải bốn', 'cmb2' ),
        'id'         => 'giai4',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giải năm', 'cmb2' ),
        'id'         => 'giai5',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giải sáu', 'cmb2' ),
        'id'         => 'giai6',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giải bảy', 'cmb2' ),
        'id'         => 'giai7',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Ngày', 'cmb2' ),
        'id'         => 'date',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Giờ', 'cmb2' ),
        'id'         => 'hours',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Miền', 'cmb2' ),
        'id'         => 'mien',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );


}

