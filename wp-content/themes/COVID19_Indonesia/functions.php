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
            "label"=>"News",
            "supports"=>['title', 'editor', 'thumbnail'],
            "public"=>true,
            "taxonomies"=>['category']
        ];
        register_post_type('news',$news);

        $event = [
            "label"=>"Events",
            "supports"=>['title', 'editor', 'thumbnail'],
            "public"=>true,
            "taxonomies"=>['category']
        ];
        register_post_type('events',$event);
    });

    add_action('excerpt_length',function(){
        return rand(10,15);
    });

    add_action('login_head',function(){
?>
    <style>
        #login h1 a{
            background-image: url('<?= DIR?>/MEDIA/editor_logo.jpg');
        }
    </style>
<?php })?>