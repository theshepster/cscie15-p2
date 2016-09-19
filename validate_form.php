<?php 

$default = 5;
$separator = "hyphen";

if ($_POST["num-words"] !== NULL)
{
    $num_words = (int) $_POST["num-words"];
}
if ($num_words == NULL || $num_words < 1 || $num_words > 9)
        $num_words = $default;

if ($_POST["num-symbols"] !== NULL)
{
    $num_symbols = (int) $_POST["num-symbols"];
}
if ($num_symbols == NULL || $num_symbols < 1 || $num_symbols > 9)
        $num_symbols = $default;

if ($_POST["num-numbers"] !== NULL)
{
    $num_numbers = (int) $_POST["num-numbers"];
}
if ($num_numbers == NULL || $num_numbers < 1 || $num_numbers > 9)
        $num_numbers = $default;

if ($_POST["separator"] !== NULL)
{
    $separator = $_POST["separator"] ? $_POST["separator"] : $separator;
}

unset($default);
?>