<?php

/*
Plugin Name: My First Amazing Plugin
Description: This plugin will change your life.
*/

add_filter('get_the_excerpt', 'amazingExcerptEdits');

function amazingExcerptEdits($post_excerpt){
    $post_excerpt = str_replace('Lorem', '*****', $post_excerpt);
    return $post_excerpt;
}

add_filter('wp_trim_words', 'amazingTrimEdits', 10, 4);

function amazingTrimEdits($trimmed_word, $numwords, $more, $original_text){
    $trimmed_word = str_replace('Lorem', '*****', $trimmed_word);
    return $trimmed_word;
}


add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits($content){
    $content = $content . "<p>All content belongs to Fictional University</p>";
    $content = str_replace('Lorem', '*****', $content);
    return $content;
}

add_shortcode('programCount', 'programCountFunction');

function programCountFunction(){
    $programCount = 0;
    $numberOfPrograms = new WP_Query(array(
        'post_type' => 'program'
    ));

    while($numberOfPrograms->have_posts()){
        $numberOfPrograms->the_post();
        $programCount += 1;
    }

    return $programCount;
}