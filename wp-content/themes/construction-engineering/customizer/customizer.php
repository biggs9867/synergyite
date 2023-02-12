<?php

function construction_engineering_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'construction_hub_color_option' );
}
add_action( 'customize_register', 'construction_engineering_remove_customize_register', 11 );

function construction_engineering_customize_register( $wp_customize ) {
    // Our Services Section
    $wp_customize->add_section('construction_engineering_services_section',array(
        'title' => __('Our Services Section','construction-engineering'),
        'panel' => 'construction_hub_panel_id',
    )); 

    $wp_customize->add_setting('construction_engineering_services_heading',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('construction_engineering_services_heading',array(
        'label' => __('Section Title','construction-engineering'),
        'section'   => 'construction_engineering_services_section',
        'type'      => 'text'
    ));
    $wp_customize->selective_refresh->add_partial( 'construction_engineering_services_heading', array(
        'selector' => '#our_services h2',
        'render_callback' => 'construction_engineering_customize_partial_construction_engineering_services_heading',
    ) );

    $categories = get_categories();
    $cats = array();
    $i = 0;
    $offer_cat[]= 'select';
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $offer_cat[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('construction_engineering_services_section_category',array(
        'default'   => 'select',
        'sanitize_callback' => 'construction_hub_sanitize_choices',
    ));
    $wp_customize->add_control('construction_engineering_services_section_category',array(
        'type'    => 'select',
        'choices' => $offer_cat,
        'label' => __('Select Category','construction-engineering'),
        'section' => 'construction_engineering_services_section',
    ));
}
add_action( 'customize_register', 'construction_engineering_customize_register' );