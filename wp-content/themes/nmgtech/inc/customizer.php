<?php
/**
 * nmgtech Theme Customizer.
 *
 * @package nmgtech
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nmgtech_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
        $wp_customize->remove_section('header_image');
        $wp_customize->remove_section('colors');
        $wp_customize->remove_section('background_image');
        $wp_customize->remove_section('static_front_page');
       $wp_customize->remove_panel( 'widgets' );
       
   /* Header Text  settings*/   
        
    $wp_customize->add_setting('section_header_maintitle',array('default'=> 'KOMPLETTER DIENSTLEISTUNGSERVICE'));
    $wp_customize->add_setting('section_header_smalltitle',array('default'=> 'angefangen von der Projektierung bis zur Wartung Installation und Reparatur'));
    $wp_customize->add_setting('section_header_button_name',array('default'=> 'TERMIN VEREINBAREN!'));
    $wp_customize->add_setting('section_header_button_text',array('default'=> 'kostenloses und unverbindliches Beratungsgespräch'));
       
    /* Beratung  settings*/   
        
    $wp_customize->add_setting('section_wa_title01',array('default'=> 'Beratung'));
    $wp_customize->add_setting('section_wa_txt01',array('default'=> 'Bei Neuanschaffung, Installation,'));
    $wp_customize->add_setting('section_wa_txt02',array('default'=> 'Wartung und Support'));
        
    /* Absicherung  settings*/   
        
    $wp_customize->add_setting('section_wb_title01',array('default'=> 'Absicherung'));
    $wp_customize->add_setting('section_wb_txt01',array('default'=> 'von einzelnen PCs'));
    $wp_customize->add_setting('section_wb_txt02',array('default'=> 'und ganzen Netzwerken'));
        
   /* Schulungen  settings*/   

    $wp_customize->add_setting('section_wc_title01',array('default'=> 'Schulungen'));
    $wp_customize->add_setting('section_wc_txt01',array('default'=> 'Schulungen und Workshops,'));
    $wp_customize->add_setting('section_wc_txt02',array('default'=> 'wir vermitteln hochwertiges Fachwissen')); 
  
   /*IT-Anlagen  settings*/   

    $wp_customize->add_setting('section_wd_title01',array('default'=> 'IT-Anlagen'));
    $wp_customize->add_setting('section_wd_txt01',array('default'=> 'der den Kunden durch alle Belange'));
    $wp_customize->add_setting('section_wd_txt02',array('default'=> 'moderner IT-Anlagen führt'));  
    
   /*Neuanschaffung  settings*/   

    $wp_customize->add_setting('section_ba_title01',array('default'=> 'Neuanschaffung'));
    $wp_customize->add_setting('section_ba_txt01',array('default'=> 'Von der Beratung vor Neuanschaffung'));
    $wp_customize->add_setting('section_ba_txt02',array('default'=> 'Installation, Wartung und Support'));  
    
   /*Analyse  settings*/   

    $wp_customize->add_setting('section_bb_title01',array('default'=> 'Analyse'));
    $wp_customize->add_setting('section_bb_txt01',array('default'=> 'Analyse und Optimierung'));
    $wp_customize->add_setting('section_bb_txt02',array('default'=> 'bestehender IT-Infrastrukturen'));  
    
   /*IT-Infrastrukturen  settings*/   

    $wp_customize->add_setting('section_bc_title01',array('default'=> 'IT-Infrastrukturen'));
    $wp_customize->add_setting('section_bc_txt01',array('default'=> 'Beratung beim Aufbau'));
    $wp_customize->add_setting('section_bc_txt02',array('default'=> 'von IT-Infrastrukturen für KMU’s'));  
    
   /*Wartung  settings*/   

    $wp_customize->add_setting('section_bd_title01',array('default'=> 'Wartung'));
    $wp_customize->add_setting('section_bd_txt01',array('default'=> 'der den Kunden durch alle Belange'));
    $wp_customize->add_setting('section_bd_txt02',array('default'=> 'moderner IT-Anlagen führt')); 
    
   /*Cloud  settings*/   

    $wp_customize->add_setting('section_be_title01',array('default'=> 'Cloud'));
    $wp_customize->add_setting('section_be_txt01',array('default'=> 'Beratung und Verkauf von WiFi Hotspots'));
    $wp_customize->add_setting('section_be_txt02',array('default'=> 'von The Cloud und autorisierter Dozent für Office und weitere Schulungen')); 
    
   /*Kooperationen mit Partnern  settings*/   

    $wp_customize->add_setting('section_bf_title01',array('default'=> 'Kooperationen mit Partnern'));
    $wp_customize->add_setting('section_bf_txt01',array('default'=> 'deutschlandweit Verbundete'));
    $wp_customize->add_setting('section_bf_txt02',array('default'=> 'IT Spezialisten'));  
    
    /*Kontakt*/   

    $wp_customize->add_setting('kontakt_txt_01',array('default'=> 'Vereinbaren Sie einen Termin'));
    $wp_customize->add_setting('kontakt_txt_02',array('default'=> 'zu einem kostenlosen und unverbindlichen Beratungsgespräch'));
    $wp_customize->add_setting('kontakt_tel',array('default'=> '+49 (0)30 5315 1663')); 
    $wp_customize->add_setting('kontakt_mob',array('default'=> '+49 (0)178 1966 420')); 


    /* Panels*/  
    
        $wp_customize->add_panel( 'panel_head', array(
          'priority'       => 400,
          'capability'     => 'edit_theme_options',
          'theme_supports' => '',
          'title'          => 'Header Text',
          'description'    => 'hier kannst du Text verändern im Head Bereich',
          ) );
        
            $wp_customize->add_panel( 'panel_id', array(
          'priority'       => 500,
          'capability'     => 'edit_theme_options',
          'theme_supports' => '',
          'title'          => 'Dienstleitung Bereich eins',
          'description'    => '',
          ) );
            
             
            $wp_customize->add_panel( 'panel_02', array(
          'priority'       => 600,
          'capability'     => 'edit_theme_options',
          'theme_supports' => '',
          'title'          => 'Dienstleitung Bereich zwei',
          'description'    => '',
          ) );
            
     
            
            
   /* Header01 */ 
            
           $wp_customize->add_section( 'header01', array(
           'priority'       => 10,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Header Text',
           'panel'  => 'panel_head',
       ) );
           
             $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_header01', array(
            'label'          => __( 'Haupt Text', 'nmgtech' ),
            'section'        => 'header01',
            'settings'       => 'section_header_maintitle',
            'description'    => 'beschränkt auf 52 Textzeichen',
            'type'           => 'text',)));
             
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_header02', array(
            'label'          => __( 'Unter Text', 'nmgtech' ),
            'section'        => 'header01',
            'settings'       => 'section_header_smalltitle',
            'description'    => 'beschränkt auf 76 Textzeichen',
            'type'           => 'text',)));
    
     /* Header02 */       
           
                    $wp_customize->add_section( 'header02', array(
           'priority'       => 20,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Button Text',
           'panel'  => 'panel_head',
       ) );
                       $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_header03', array(
            'label'          => __( 'Button Innentext', 'nmgtech' ),
            'section'        => 'header02',
            'settings'       => 'section_header_button_name',
            'description'    => 'beschränkt auf 20 Textzeichen',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_header04', array(
            'label'          => __( 'Button Unterntext', 'nmgtech' ),
            'section'        => 'header02',
            'settings'       => 'section_header_button_text',
            'description'    => 'beschränkt auf 50 Textzeichen',
            'type'           => 'text',)));      
  
   /* Bereich Eins */        
            
   /* Beratung  section&control*/
            
            $wp_customize->add_section( 'deinstleistungen01', array(
           'priority'       => 10,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Beratung',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_id',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wa_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen01',
            'settings'       => 'section_wa_title01',
            'type'           => 'text',
          ) ));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wa_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen01',
            'settings'       => 'section_wa_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wa_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen01',
            'settings'       => 'section_wa_txt02',
            'type'           => 'text',)));
        
    /* Absicherung section&control*/
            
            $wp_customize->add_section( 'deinstleistungen02', array(
           'priority'       => 20,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Absicherung',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_id',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wb_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen02',
            'settings'       => 'section_wb_title01',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wb_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen02',
            'settings'       => 'section_wb_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wb_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen02',
            'settings'       => 'section_wb_txt02',
            'type'           => 'text',)));
          
    /* Schulungen section&control*/
            
            $wp_customize->add_section( 'deinstleistungen03', array(
           'priority'       => 30,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Schulungen',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_id',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wc_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen03',
            'settings'       => 'section_wc_title01',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wc_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen03',
            'settings'       => 'section_wc_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wc_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen03',
            'settings'       => 'section_wc_txt02',
            'type'           => 'text',)));
           
    /* IT-Anlagen section&control*/
            
            $wp_customize->add_section( 'deinstleistungen04', array(
           'priority'       => 40,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'IT-Anlagen',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_id',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wd_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen04',
            'settings'       => 'section_wd_title01',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wd_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen04',
            'settings'       => 'section_wd_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_wd_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen04',
            'settings'       => 'section_wd_txt02',
            'type'           => 'text',)));           

   /* Bereich Zwei */
           
    /* Neuanschaffung  section&control*/
            
            $wp_customize->add_section( 'deinstleistungen05', array(
           'priority'       => 10,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Neuanschaffung',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_02',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_ba_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen05',
            'settings'       => 'section_ba_title01',
            'type'           => 'text',
            
        )));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_ba_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen05',
            'settings'       => 'section_ba_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_ba_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen05',
            'settings'       => 'section_ba_txt02',
            'type'           => 'text',)));
        
    /* Analyse section&control*/
            
            $wp_customize->add_section( 'deinstleistungen06', array(
           'priority'       => 20,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Analyse',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_02',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bb_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen06',
            'settings'       => 'section_bb_title01',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bb_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen06',
            'settings'       => 'section_bb_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bb_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen06',
            'settings'       => 'section_bb_txt02',
            'type'           => 'text',)));
          
    /* IT-Infrastrukturen section&control*/
            
            $wp_customize->add_section( 'deinstleistungen07', array(
           'priority'       => 30,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'IT-Infrastrukturen',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_02',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bc_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen07',
            'settings'       => 'section_bc_title01',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bc_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen07',
            'settings'       => 'section_bc_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bc_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen07',
            'settings'       => 'section_bc_txt02',
            'type'           => 'text',)));
           
    /* Wartung section&control*/
            
            $wp_customize->add_section( 'deinstleistungen08', array(
           'priority'       => 40,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Wartung',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_02',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bd_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen08',
            'settings'       => 'section_bd_title01',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bd_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen08',
            'settings'       => 'section_bd_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bd_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen08',
            'settings'       => 'section_bd_txt02',
            'type'           => 'text',)));   
           
     /* Cloud section&control*/
            
            $wp_customize->add_section( 'deinstleistungen09', array(
           'priority'       => 40,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Cloud',
          'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_02',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_be_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen09',
            'settings'       => 'section_be_title01',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_be_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen09',
            'settings'       => 'section_be_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_be_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen09',
            'settings'       => 'section_be_txt02',
            'type'           => 'text',)));   
           
    /* Kooperationen mit Partnern section&control*/
            
            $wp_customize->add_section( 'deinstleistungen10', array(
           'priority'       => 40,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Kooperationen mit Partnern',
           'description'    => 'beschränkt auf 49 Textzeichen',
           'panel'  => 'panel_02',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bf_title01', array(
            'label'          => __( 'Title', 'nmgtech' ),
            'section'        => 'deinstleistungen10',
            'settings'       => 'section_bf_title01',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bf_txt01', array(
            'label'          => __( 'Textzeile eins', 'nmgtech' ),
            'section'        => 'deinstleistungen10',
            'settings'       => 'section_bf_txt01',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_bf_txt02', array(
            'label'          => __( 'Textzeile zwei', 'nmgtech' ),
            'section'        => 'deinstleistungen10',
            'settings'       => 'section_bf_txt02',
            'type'           => 'text',)));  
           
             
    /* Kontakt section&control*/
            
            $wp_customize->add_section( 'kontakt', array(
           'priority'       => 600,
           'capability'     => 'edit_theme_options',
           'theme_supports' => '',
           'title'          => 'Kontakt',
           'description'    => '',
       ) );
    
        
        $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_kontakt_01', array(
            'label'          => __( 'Haupt Text', 'nmgtech' ),
            'section'        => 'kontakt',
            'settings'       => 'kontakt_txt_01',
            'description'    => 'beschränkt auf 20 Textzeichen',
            'type'           => 'text',)));
         $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_kontakt_02', array(
            'label'          => __( 'Klein Text', 'nmgtech' ),
            'section'        => 'kontakt',
            'settings'       => 'kontakt_txt_02',
             'description'    => 'beschränkt auf 50 Textzeichen',
            'type'           => 'text',)));
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_kontakt_03', array(
            'label'          => __( 'Festnetznummer', 'nmgtech' ),
            'section'        => 'kontakt',
            'settings'       => 'kontakt_tel',
            'type'           => 'text',)));  
           $wp_customize->add_control(  new WP_Customize_Control($wp_customize,
        'control_kontakt_04', array(
            'label'          => __( 'Handynummer', 'nmgtech' ),
            'section'        => 'kontakt',
            'settings'       => 'kontakt_mob',
            'type'           => 'text',)));             
                   
     
}
add_action( 'customize_register', 'nmgtech_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nmgtech_customize_preview_js() {
	wp_enqueue_script( 'nmgtech_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'nmgtech_customize_preview_js' );
