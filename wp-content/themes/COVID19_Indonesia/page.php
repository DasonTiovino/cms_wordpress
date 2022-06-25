<?php get_header() ?>
    <div class="single">
        <img src="<?=get_the_post_thumbnail_url()?>" alt="">
        <h1><?=the_title()?></h1>
        <p><?=the_content()?></p>
    </div>
<?php get_footer() ?>