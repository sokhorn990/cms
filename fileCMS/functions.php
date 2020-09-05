<?php 
 function featureImag(){
     add_theme_support('post-thumbnails');
     set_post_thumbnail_size(400,400);
}

 add_action('after_setup_theme','featureImag');

 function nav_menu(){
     register_nav_menus(array(
         'primary'=>__('primary Menu'),
         'footer'=>__('Footer Menu')
     ));
}
add_action('after_setup_theme','nav_menu');

function init_widget($id){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar',
        'before_widget'=>'',
        'after_widget'=>'',
        'before_title'=>'<h3 style="color:red">',
        'after_title'=>'</h3>',
    ));
}
add_action('widgets_init', 'init_widget');
    register_sidebar(array(
        'name'=>'Box 1',
        'id'=>'box1',
        'before_widget'=>'<div  class="box1">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 style="color:pink, background-color:blue,padding: 5 15px ">',
        'after_title'=>'</h4>',
    ));
    register_sidebar(array(
        'name'=>'Box 2',
        'id'=>'box2',
        'before_widget'=>'<div  class="box2">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 style="color:pink, background-color:blue,padding: 5 15px ">',
        'after_title'=>'</h4>',
    ));
    register_sidebar(array(
        'name'=>'Box 3',
        'id'=>'box3',
        'before_widget'=>'<div  class="box3">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 style="color:pink, background-color:blue,padding: 5 15px ">',
        'after_title'=>'</h4>',
    ));

add_action('widgets_init', 'init_widget');
?>