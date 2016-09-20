<?php 

# $default is declared in defaults.php

if (isset($_POST["num-words"]))
{
    $num_words = (int) $_POST["num-words"];
}
if ($num_words === NULL || $num_words < 1 || $num_words > 9)
        $num_words = $default;

if (isset($_POST["num-symbols"]))
{
    $num_symbols = (int) $_POST["num-symbols"];
}
if ($num_symbols === NULL || $num_symbols < 1 || $num_symbols > 9)
        $num_symbols = $default;

if (isset($_POST["num-numbers"]))
{
    $num_numbers = (int) $_POST["num-numbers"];
}
if ($num_numbers === NULL || $num_numbers < 1 || $num_numbers > 9)
        $num_numbers = $default;

if (isset($_POST["separator"]))
{
    $separator = $_POST["separator"] ? $_POST["separator"] : $separator;
}

?>