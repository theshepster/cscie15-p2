<?php 

$default = 5;
if (!isset($_POST['separator']))
    $separator = "hyphen";
if (!isset($_POST['num-words']))
    $num_words = $default;
if (!isset($_POST['num-symbols']))
    $num_symbols = $default;
if (!isset($_POST['num_numbers']))
    $num_numbers = $default;

?>