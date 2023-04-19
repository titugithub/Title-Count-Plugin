<?php 

/*
* Plugin Name: Title Count
*/

add_filter('the_title',function($title){

    $titlec =  str_word_count($title);
    $title .= " -Total words: ".$titlec;
    return $title;
});



