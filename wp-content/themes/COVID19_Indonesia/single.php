<?php get_header() ?>
    <?php while(have_posts()):the_post()?>
        <div class="single">
            <img src="<?=get_the_post_thumbnail_url()?>" alt="">
            <h1><?=the_title()?></h1>
            <p><?=the_content()?></p>
        </div>
    <?php endwhile?>
<?php get_footer() ?>