<?php

namespace App;

// disable the admin bar
show_admin_bar(false);

// remove js from wordpress
add_action('init', function() {
    wp_deregister_script('wp-embed');
},100);

// remove css from wordpress
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
},99);


function ampify($html='') {
    // Replace img, audio, and video elements with amp custom elements
    $html = str_ireplace(
        ['<img','<video','/video>','<audio','/audio>'],
        ['<amp-img','<amp-video','/amp-video>','<amp-audio','/amp-audio>'],
        $html
    );
    // Add closing tags to amp-img custom element
    $html = preg_replace('/<amp-img(.*?)>/', '<amp-img$1></amp-img>',$html);

    // remove any style attribute tag
    $html = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $html);

    // remove any onmouseover tag
    $html = preg_replace('/(<[^>]+) onmouseover=".*?"/i', '$1', $html);

    // remove any onmouseout tag
    $html = preg_replace('/(<[^>]+) onmouseout=".*?"/i', '$1', $html);
    
    // Whitelist of HTML tags allowed by AMP
    $html = strip_tags($html,'<h1><h2><h3><h4><h5><h6><a><p><ul><ol><li><blockquote><q><cite><ins><del><strong><em><code><pre><svg><table><thead><tbody><tfoot><th><tr><td><dl><dt><dd><article><section><header><footer><aside><figure><time><abbr><div><span><hr><small><br><amp-img><amp-audio><amp-video><amp-ad><amp-anim><amp-carousel><amp-fit-rext><amp-image-lightbox><amp-instagram><amp-lightbox><amp-twitter><amp-youtube>');
    return $html;
}

//add_filter( 'the_content', 'tutsplus_the_content' );
add_filter( 'the_content', function( $content ) {
 
    // Replace img, audio, and video elements with amp custom elements
    $content = str_ireplace(
        ['<img','<video','/video>','<audio','/audio>'],
        ['<amp-img','<amp-video','/amp-video>','<amp-audio','/amp-audio>'],
        $content
    );
    // Add closing tags to amp-img custom element
    $content = preg_replace('/<amp-img(.*?)>/', '<amp-img layout="responsive" $1></amp-img>',$content);

    // remove any style attribute tag
    $content = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $content);

    // remove any onmouseover tag
    $content = preg_replace('/(<[^>]+) onmouseover=".*?"/i', '$1', $content);

    // remove any onmouseout tag
    $content = preg_replace('/(<[^>]+) onmouseout=".*?"/i', '$1', $content);
    
    // Whitelist of HTML tags allowed by AMP
    $content = strip_tags($content,'<h1><h2><h3><h4><h5><h6><a><p><ul><ol><li><blockquote><q><cite><ins><del><strong><em><code><pre><svg><table><thead><tbody><tfoot><th><tr><td><dl><dt><dd><article><section><header><footer><aside><figure><time><abbr><div><span><hr><small><br><amp-img><amp-audio><amp-video><amp-ad><amp-anim><amp-carousel><amp-fit-rext><amp-image-lightbox><amp-instagram><amp-lightbox><amp-twitter><amp-youtube>');
    return $content;
    
}, 100);