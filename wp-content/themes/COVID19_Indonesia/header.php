<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php wp_head() ?>
</head>
<body>
    <div class="navigation">
        <div>
            <a href="<?= get_home_url()?>">COVID19 Indonesia</a>
        </div>
        <div>
            <a class="nav-home" href="<?= get_home_url()?>">Home</a>
            <a class="nav-categories">Our Categories</a>
            <?php wp_nav_menu(); ?>
        </div>
    </div>
    
