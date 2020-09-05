<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
<?php get_header()?>
    <div class="container">
        <div class="row">
    <div class="col-9">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
        <?php the_post()?><br>
        <div class="title mt-5">
            <h3><a href="<?php the_permalink() ?>"><h3><?php the_title();?></h3></a></h3>
        </div>
        <h5>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
               Writen By: <?php  the_author()?>
               </a> Date: <?php the_time('F j, Y');?> 
            </h5 >
        <?php endwhile ?>
    <?php endif ?>
        </div>
            <div class ="col-3" style = " margin-top:20px;left:50px">
                <?php 
    if(is_active_sidebar('sidebar')):
    ?>
     <?php dynamic_sidebar('sidebar');?>
    <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="footer">
      <?php get_footer();?>
    </div>

</body>
</html>