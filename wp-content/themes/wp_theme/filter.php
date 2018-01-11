<?php
function text($text){

    strip_tags($text);
    return apply_filters("my_filter_name", $text);
}

function my_filter_function($text){

    return mb_substr($text,0,30)."...";
}
add_filter("my_filter_name", "my_filter_function");

echo text("Lorem <br>Ipsum is simply dummy text of the <br>printing and typesetting industry.")
?>