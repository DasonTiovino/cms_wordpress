<?php get_header() ?>
    <div class="category">
        <h1><?= get_queried_object()->name?></h1>
    
        <div class="row">
            <?php 
                $q = new WP_Query(['post_type'=>['news','events'], 'category_name'=>get_queried_object()->slug]);
                if($q->have_posts()):
            ?>
                <?php while($q->have_posts()):$q->the_post()?>
                    <div class="post">
                        <img src="<?= get_the_post_thumbnail_url()?>" alt="">
                        <div>
                            <a class="content_title"
                                href="<?=the_permalink()?>">
                                <?=the_title()?>
                            </a>
                            <p><?= the_excerpt()?></p>
                        </div>
                    </div>
                <?php endwhile?>
            <?php endif?>
        </div>
    </div>
<?php get_footer() ?>