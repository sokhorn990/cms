<?php function idparent(){
    global $post;
    $id = $post->ID;
    if($post->post_parent){
        $ancestor = get_post_ancestors($id);
        return $ancestor[0];
    }
    return $id;

}

function amountchild(){
    global $post;

    $pages = get_pages('child_of='.$post->ID);
    return count($pages);
}

function nav_menu(){
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    
    ));
    
    
    
}
add_action('after_setup_theme','nav_menu');





?>