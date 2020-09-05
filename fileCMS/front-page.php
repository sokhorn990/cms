<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
<body>
<?php get_header()?>

  <div class="container">
  <div class="row">
  <div class="main1">
  <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a><br>
        Written by <?php the_author();?><br>
        </a> Date: <?php the_time('F j, Y');?> <br>
        <!-- category <?php the_category();?><br> -->
       <span><?php the_tags();?> <br>
        
        <?php
            if (has_post_thumbnail()) :
              the_post_thumbnail();
            else : echo "NOT FOUND";
            endif
            ?>
        <div class="main">
          <p><?php the_excerpt(); ?></p>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>
    <a class="btn btn-primary" href="<?php the_permalink(); ?>">More Info</a>
     </div>
 <div class="side">
 <?php 

if(is_active_sidebar('sidebar')):
    dynamic_sidebar('sidebar');
endif;
?>
  </div>
    </div>
  </div>

  <div class="boxnew">
    <div class="col-12">
      <div class="row">
         <div class="col-4">
         <div class="box1">
          <?php if(is_active_sidebar('box1')): ?>
          <?php dynamic_sidebar('box1'); ?>
        <?php endif; ?>
      </div>
         </div>
    <div class="col-4">
        <div class="box2">
          <?php if(is_active_sidebar('box2')): ?>
          <?php dynamic_sidebar('box2'); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-4">
    <div class="box3">
          <?php if(is_active_sidebar('box3')): ?>
          <?php dynamic_sidebar('box3'); ?>
        <?php endif; ?>
      </div>
    </div>
          </div>
      </div>
  </div>
  <div class="footer">
      <?php get_footer();?>
    </div>
</body>
</html>

