<?php get_header() ?>
    <section class="content">
        <div class="content_banner">
            <img src="<?=DIR?>/MEDIA/content_banner.jpg" alt="">
            <div class="blocker">
                <h1>Ayo Lawan Corona Bersama</h1>
            </div>
        </div>

        <div class="content_">
            <p class="content_type">News</p>
            <div class="row">
                <?php 
                    $q = new WP_Query(['post_type'=>'news']);
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
        <div class="content_">
            <p class="content_type">Events</p>
            <div class="row">
                <?php 
                    $q = new WP_Query(['post_type'=>'events']);
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
    </section>
<?php get_footer() ?>