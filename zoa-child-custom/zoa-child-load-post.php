<?php
function zoa_child_get_posts_destaque($number_posts, $size_a, $size_b){
    $args = array( 'numberposts' => $number_posts, 'post_type' => 'post', 'post_status' => 'publish');
    $recent_posts = wp_get_recent_posts($args);
    
    $resultado = array();[]; 
    foreach( $recent_posts as $recent ){
        //$res["nome_categoria"] = $categorias_nome[5705];
        $res["post_link"]  = get_permalink($recent["ID"]);
        $res["post_title"] = $recent["post_title"];
        $res["post_date"] =  $recent["post_date_gmt"];
        //$res["post_image"] = get_the_post_thumbnail( $recent["ID"], 'medium');
        $res["post_autor"] = get_the_author_meta('first_name', intval($recent["post_author"])) . " " . get_the_author_meta('last_name', intval($recent["post_author"])); 
        $res["post_comentarios"] = get_comments_number($recent["ID"]);
        $res["post_image"] = get_the_post_thumbnail( $recent["ID"], array( $size_a, $size_b));
        $res["post_categoria"] = get_the_category( $recent["ID"])[0] -> name; 
        array_push($resultado, $res);
    }
    wp_reset_query();
    return $resultado;
}