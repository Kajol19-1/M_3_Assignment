<?php

$text = "The quick brown fox jumps over the lazy dog.";
function modifiedText($text) {

    $text = strtolower($text);

    $text = str_replace("brown", "red", $text);

    echo "Modified Text is: {$text}";
}
modifiedText($text);
?>