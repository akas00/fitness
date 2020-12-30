<?php

/*Creating custom option to our Customizer*/
function fitness_customize_register( $wp_customize ) {
  
    $wp_customize->add_panel('homepage',array(
            'title' =>__('Homepage' ) ,
            'description' => '', 
            'priority' =>10, 
    ) );



$wp_customize->add_section( 'logo' , array(
    'title'   => 'Logo',
    'panel'   => 'homepage',
) );


$wp_customize->add_setting('logo', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo', array(
    'label'    => __('Logo '),
    'section'  => 'logo',
    'settings' => 'logo',
    
)));




$wp_customize->add_section( 'header' , array(
    'title'   => 'Header',
    'panel'   => 'homepage',
) );

$wp_customize->add_setting('header_address', array(
        
    'default'           => __( 'Sunderbasti, Bhaktapur' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'header_address',
        array(
            'label'    => __( ' Header Address ' ),
            'section'  => 'header',
            'settings' => 'header_address',
            'type'     => 'text'
        )
    )
 );


 $wp_customize->add_setting( 'header_address_link', array(
    'default'           => __( 'https://www.map.com/' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'header_address_link',
       array(
           'label'    => __( 'Header address Link' ),
           'section'  => 'header',
           'settings' => 'header_address_link',
           'type'     => 'text'
       )
   )
);


 $wp_customize->add_setting('header_number', array(
        
    'default'           => __( '+977 9841547522' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'header_number',
        array(
            'label'    => __( ' Header Number ' ),
            'section'  => 'header',
            'settings' => 'header_number',
            'type'     => 'text'
        )
    )
 );


// Banner


$wp_customize->add_section( 'banner' , array(
    'title'   => 'Banner',
    'panel'   => 'homepage',
) );

$wp_customize->add_setting('Banner_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'Banner_image', array(
    'label'    => __('Banner Image '),
    'section'  => 'banner',
    'settings' => 'Banner_image',
    
)));




$wp_customize->add_setting('banner_title', array(
        
    'default'           => __( 'Loose Fat Get Fit Have Fun' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'banner_title',
        array(
            'label'    => __( ' Banner Text ' ),
            'section'  => 'banner',
            'settings' => 'banner_title',
            'type'     => 'text'
        )
    )
 );





//  About Section

$wp_customize->add_section( 'about' , array(
    'title'   => 'About Section',
    'panel'   => 'homepage',
) );


$wp_customize->add_setting('about_title', array(
        
    'default'           => __( 'Transform Yourself Today' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'about_title',
        array(
            'label'    => __( ' About Title ' ),
            'section'  => 'about',
            'settings' => 'about_title',
            'type'     => 'text'
        )
    )
 );

 $wp_customize->add_setting('about_details', array(
        
    'default'           => __( 'Transform Yourself Today' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'about_details',
        array(
            'label'    => __( ' About Details ' ),
            'section'  => 'about',
            'settings' => 'about_details',
            'type'     => 'text'
        )
    )
 );


 $wp_customize->add_setting('About_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'About_image', array(
    'label'    => __('About Image '),
    'section'  => 'about',
    'settings' => 'About_image',
    
)));


// plans



$wp_customize->add_section( 'plan' , array(
    'title'   => 'Plan Section',
    'panel'   => 'homepage',
) );


$wp_customize->add_setting('plan1_title', array(
        
    'default'           => __( 'GYM' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan1_title',
        array(
            'label'    => __( ' plan1 Title ' ),
            'section'  => 'plan',
            'settings' => 'plan1_title',
            'type'     => 'text'
        )
    )
 );

 $wp_customize->add_setting('plan1_details', array(
        
    'default'           => __( 'By International Trainer' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan1_details',
        array(
            'label'    => __( ' plan1 details ' ),
            'section'  => 'plan',
            'settings' => 'plan1_details',
            'type'     => 'text'
        )
    )
 );




 $wp_customize->add_setting('plan1_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'plan1_image', array(
    'label'    => __('Plan1 Image '),
    'section'  => 'plan',
    'settings' => 'plan1_image',
    
)));







$wp_customize->add_setting('plan2_title', array(
        
    'default'           => __( 'Zymba' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan2_title',
        array(
            'label'    => __( ' plan2 Title ' ),
            'section'  => 'plan',
            'settings' => 'plan2_title',
            'type'     => 'text'
        )
    )
 );
 $wp_customize->add_setting('plan2_details', array(
        
    'default'           => __( 'By International Trainer' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan2_details',
        array(
            'label'    => __( ' plan2 details ' ),
            'section'  => 'plan',
            'settings' => 'plan2_details',
            'type'     => 'text'
        )
    )
 );




 $wp_customize->add_setting('plan2_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'plan2_image', array(
    'label'    => __('Plan2 Image '),
    'section'  => 'plan',
    'settings' => 'plan2_image',
    
)));


// 3


$wp_customize->add_setting('plan3_title', array(
        
    'default'           => __( 'GYM' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan3_title',
        array(
            'label'    => __( ' plan2 Title ' ),
            'section'  => 'plan',
            'settings' => 'plan3_title',
            'type'     => 'text'
        )
    )
 );

 $wp_customize->add_setting('plan3_details', array(
        
    'default'           => __( 'By International Trainer' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan3_details',
        array(
            'label'    => __( ' plan3 details ' ),
            'section'  => 'plan',
            'settings' => 'plan3_details',
            'type'     => 'text'
        )
    )
 );




 $wp_customize->add_setting('plan3_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'plan3_image', array(
    'label'    => __('Plan3 Image '),
    'section'  => 'plan',
    'settings' => 'plan3_image',
    
)));

// 4

$wp_customize->add_setting('plan4_title', array(
        
    'default'           => __( 'GAMES' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan4_title',
        array(
            'label'    => __( ' plan4 Title ' ),
            'section'  => 'plan',
            'settings' => 'plan4_title',
            'type'     => 'text'
        )
    )
 );


 $wp_customize->add_setting('plan4_details', array(
        
    'default'           => __( 'By International Trainer' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan4_details',
        array(
            'label'    => __( ' plan4 details ' ),
            'section'  => 'plan',
            'settings' => 'plan4_details',
            'type'     => 'text'
        )
    )
 );




 $wp_customize->add_setting('plan4_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'plan4_image', array(
    'label'    => __('Plan4 Image '),
    'section'  => 'plan',
    'settings' => 'plan4_image',
    
)));



// 5

$wp_customize->add_setting('plan5_title', array(
        
    'default'           => __( 'GYM' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan5_title',
        array(
            'label'    => __( ' plan5 Title ' ),
            'section'  => 'plan',
            'settings' => 'plan5_title',
            'type'     => 'text'
        )
    )
 );

 $wp_customize->add_setting('plan5_details', array(
        
    'default'           => __( 'By International Trainer' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan5_details',
        array(
            'label'    => __( ' plan5 details ' ),
            'section'  => 'plan',
            'settings' => 'plan5_details',
            'type'     => 'text'
        )
    )
 );




 $wp_customize->add_setting('plan5_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'plan5_image', array(
    'label'    => __('Plan5 Image '),
    'section'  => 'plan',
    'settings' => 'plan5_image',
    
)));

// 6

$wp_customize->add_setting('plan6_title', array(
        
    'default'           => __( 'Transform ' ),
    'sanitize_callback' => 'esc_attr'
));





$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan6_title',
        array(
            'label'    => __( ' plan6 Title ' ),
            'section'  => 'plan',
            'settings' => 'plan6_title',
            'type'     => 'text'
        )
    )
 );


 $wp_customize->add_setting('plan6_details', array(
        
    'default'           => __( 'By International Trainer' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan6_details',
        array(
            'label'    => __( ' plan6 details ' ),
            'section'  => 'plan',
            'settings' => 'plan6_details',
            'type'     => 'text'
        )
    )
 );




 $wp_customize->add_setting('plan6_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'plan6_image', array(
    'label'    => __('Plan6 Image '),
    'section'  => 'plan',
    'settings' => 'plan6_image',
    
)));

// 7


$wp_customize->add_setting('plan7_title', array(
        
    'default'           => __( 'Today' ),
    'sanitize_callback' => 'esc_attr'
));





$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan7_title',
        array(
            'label'    => __( ' plan7 Title ' ),
            'section'  => 'plan',
            'settings' => 'plan7_title',
            'type'     => 'text'
        )
    )
 );
 $wp_customize->add_setting('plan7_details', array(
        
    'default'           => __( 'By International Trainer' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'plan7_details',
        array(
            'label'    => __( ' plan7details ' ),
            'section'  => 'plan',
            'settings' => 'plan7_details',
            'type'     => 'text'
        )
    )
 );




 $wp_customize->add_setting('plan7_image', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'plan7_image', array(
    'label'    => __('Plan7 Image '),
    'section'  => 'plan',
    'settings' => 'plan7_image',
    
)));





// Pricing

$wp_customize->add_section( 'pricing' , array(
    'title'   => 'Opening hours and pricing ',
    'panel'   => 'homepage',
) );

$wp_customize->add_setting('opening_hours', array(
        
    'default'           => __( '5:00 AM - 11:00 AM, 3:00PM - 8:00PM (Sun - Fri)' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'opening_hours',
        array(
            'label'    => __( 'Opening Hours' ),
            'section'  => 'pricing',
            'settings' => 'opening_hours',
            'type'     => 'text'
        )
    )
 );

 $wp_customize->add_setting('admission', array(
        
    'default'           => __( 'Rs 500' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'admission',
        array(
            'label'    => __( 'Admission ' ),
            'section'  => 'pricing',
            'settings' => 'admission',
            'type'     => 'text'
        )
    )
 );



 // Footer

$wp_customize->add_section( 'footer' , array(
    'title'   => 'Footer ',
    'panel'   => 'homepage',
) );

$wp_customize->add_setting('footer_address', array(
        
    'default'           => __( 'Sundarbasti, Suryvinayak-6, Bhaktapur' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'footer_address',
        array(
            'label'    => __( 'Footer Address' ),
            'section'  => 'footer',
            'settings' => 'footer_address',
            'type'     => 'text'
        )
    )
 );


 $wp_customize->add_setting('footer_number', array(
        
    'default'           => __( '+977 695558855' ),
    'sanitize_callback' => 'esc_attr'
));



$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'footer_number',
        array(
            'label'    => __( 'Footer Number' ),
            'section'  => 'footer',
            'settings' => 'footer_number',
            'type'     => 'text'
        )
    )
 );


 $wp_customize->add_setting('footer_logo', array(
        

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
    'label'    => __('Footer Logo '),
    'section'  => 'footer',
    'settings' => 'footer_logo',
    
)));



$wp_customize->add_section( 'socialicon_links' , array(
    'title'   => 'Social Icon Links',
    'panel'   => 'homepage',
) );


$wp_customize->add_setting( 'facebook', array(
    'default'           => __( 'https://www.facebook.com/' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'facebook',
       array(
           'label'    => __( 'Facebok Link' ),
           'section'  => 'socialicon_links',
           'settings' => 'facebook',
           'type'     => 'text'
       )
   )
);

$wp_customize->add_setting( 'instagram', array(
    'default'           => __( 'https://www.instagram.com/' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'instagram',
       array(
           'label'    => __( 'Instagram Link' ),
           'section'  => 'socialicon_links',
           'settings' => 'instagram',
           'type'     => 'text'
       )
   )
);

$wp_customize->add_setting( 'youtube', array(
    'default'           => __( 'https://www.youtube.com/' ),
    'sanitize_callback' => 'esc_attr'
) );

$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'youtube',
       array(
           'label'    => __( 'Youtube Link' ),
           'section'  => 'socialicon_links',
           'settings' => 'youtube',
           'type'     => 'text'
       )
   )
);


 





}


add_action( 'customize_register', 'fitness_customize_register' );