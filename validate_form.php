<?php 

$default = 5;
$separator = "space";

if ($_POST)
{
    $num_words = (int) $_POST["num-words"];
    if ($num_words < 1 || $num_words > 9)
        $num_words = $default;

    $num_symbols = (int) $_POST["num-symbols"];
    if ($num_symbols < 1 || $num_symbols > 9)
        $num_symbols = $default;

    $num_numbers = (int) $_POST["num-numbers"];
    if ($num_numbers < 1 || $num_numbers > 9)
        $num_numbers = $default;

    $separator = $_POST["separator"] ? $_POST["separator"] : $separator;
}

unset($default);
?>