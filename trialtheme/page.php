<html>
<head>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
<body>

<?php get_header();  ?>
    <?php if(have_posts()):?>
        <?php while(have_posts()):?>
            <?php the_post();?>
            <div class="box">
                <?php if(amountchild()||$post->post_parent>0):?>
                <!--all activities will do except chile page-->
                <ul id="new">
                    <a href="<?php get_the_permalink(idparent());  ?>"><?php echo get_the_title(idparent()); ?></a></span>
                <?php
                   $args = array(

                        'title_li'=>'',
                        'child_of'=>idparent(),


                   );
                   
                   ?>
                <?php wp_list_pages($args);?>
                </ul>
                <?php endif; ?>   
                <?php
                   the_title();
                   the_content();
                ?>
            
            
            
        <?php endwhile; ?>
    <?php endif; ?>
</div>
</body>
</html>