<?php
// Header text till customizer
function yourprofile_customize ( $wp_customize ) {
    //Header Showcase section
    $wp_customize->add_section('showcase', array(
        'title' => __('Frontpage Showcase', 'yourpofile'),
        'description' => __('Options for showcase', 'yourpofile'),
        'priority' => 130
    ));
        $wp_customize->add_setting('showcase_heading', array(
        'default'   =>  __('Developer with an eye for Wordpress sites','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('showcase_heading', array(
        'label'     =>  __('Head title text','yourprofile'),
        'section'   =>  'showcase',
        'priority'  =>  1
    ));
}
add_action( 'customize_register', 'yourprofile_customize');

