<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
</head>
<body>
<header>
<div class="jumbotron jumbotron-fluid">
<div class="container text-center">
    <h1><?php bloginfo('name') ?></h1>
    <span><?php bloginfo('description');?></span>
</div>   
</div>
</header>
<?php get_footer()?>
</body>
</html>