<?php 
 /*
  * Plugin Name: Footer Icons
  */
    add_action('init',function(){
        add_option('footer-icons',[
            'twitter'=>[
                "show"=>"1",
                "link"=>"#",
                "class"=>'fab fa-twitter'
            ],
            'facebook'=>[
                "show"=>"1",
                "link"=>"#",
                "class"=>'fab fa-facebook'    
            ],
            'instagram'=>[
                "show"=>"1",
                "link"=>"#",
                "class"=>'fab fa-instagram'
            ]
        ]);
    });

    add_action('admin_menu',function(){
        add_menu_page(
            'social_links',
            'social_links',
            'manage_options',
            'social-links'
        );
    });
?>