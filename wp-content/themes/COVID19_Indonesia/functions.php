<?php 
    define('DIR',get_stylesheet_directory_uri());
    add_action('wp_dashboard_setup',function(){
        remove_meta_box('dashboard_site_health','dashboard','normal');
        remove_meta_box('dashboard_primary','dashboard','side');
    });
    add_action('admin_menu',function(){
        remove_menu_page('edit.php');
    });
    add_action('init',function(){
        $news = [
            "lable"=>"news",
            "public"=>true,
            "taxonomies"=>['category'],
            "supports"=>['title','editor','thumbnail']
        ];
        register_post_type('news',$news);

        $event = [
            "lable"=>"events",
            "public"=>true,
            "taxonomies"=>['category'],
            "supports"=>['title','editor','thumbnail']
        ];
        register_post_type('news',$event);
    });
?>