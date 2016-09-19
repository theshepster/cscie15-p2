<?php

// get wordlist from csv
$handle = fopen('wordlist.csv', 'r');
$wordlist = array("hi", "this", "is", "your", "mom", "speaking", "are", "you", "listening", "to", "me");
while(($data = fgetcsv($handle)) !== FALSE)
{
    for ($i=0; $i < count($data); $i++)
            $wordlist[] = $data[$i];
}
fclose($handle);

// choose random words
// uses array_flip to get values instead of keys
$words = array_rand(array_flip($wordlist), $num_words);

// choose random symbols
$symbollist = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "=", "_", "+", "<", ">", ",", ".", "?", "/", "\\", "|"];
$symbols = array_rand(array_flip($symbollist), $num_symbols);

// choose random numbers
$numbers = array();
for ($i = 0; $i < $num_numbers; $i++)
   $numbers[] = random_int(1, 9);

// get separator
$separators = ["space" => " ", "comma" => ",", "underscore" => "_", "period" => "."];
$separator = $separators[$separator];

// concatenate words, separated by separator
$pwd = implode($separator, $words);

// add symbols and numbers to end
$pwd .= implode($symbols);
$pwd .= implode($numbers);

?>