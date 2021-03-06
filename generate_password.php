<?php

// get wordlist from csv
// $handle = fopen('wordlist.csv', 'r');
// $wordlist = [];
// while(($data = fgetcsv($handle)) !== FALSE)
// {
//     for ($i=0; $i < count($data); $i++)
//             $wordlist[] = $data[$i];
// }
// fclose($handle);
require_once('wordlist.php');

// choose random words
// uses array_flip to get values instead of keys
$words = array_rand(array_flip($wordlist), $num_words);

// choose random symbols
$symbollist = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "=", "_", "+", "<", ">", ",", ".", "?", "/", "\\", "|"];
$symbols = array_rand(array_flip($symbollist), $num_symbols);

// choose random numbers
$numbers = array();
for ($i = 0; $i < $num_numbers; $i++)
   $numbers[] = rand(1, 9);

// get separator
$separators = ["space" => " ", "comma" => ",", "underscore" => "_", "period" => ".", "hyphen" => "-"];
$separator = $separators[$separator];

// concatenate words, separated by separator
if (count($words) > 1)
    $pwd = implode($separator, $words);
else
    $pwd = $words;

// add symbols and numbers to end
if (count($symbols) > 1)
    $pwd .= implode($symbols);
else
    $pwd .= $symbols;
    
$pwd .= implode($numbers);

?>
