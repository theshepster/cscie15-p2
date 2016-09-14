<?php
/*
// This code is commented out to prevent it from being executed, 
// now that the wordlist has already been scraped.

$main = "http://www.paulnoll.com/Books/Clear-English/words-";

$file = fopen('wordlist.csv', 'w');



for($first_num = 1, $second_num = 2; $first_num < 30; $first_num += 2, $second_num += 2)
{
    $address = sprintf("%s%'02d-%'02d-hundred.html", $main, $first_num, $second_num);
    $page = file_get_contents($address);
    $words = array();
    $pattern = '|(?:<li>\W*)(\w+)(?:\W*</li>)|';
    preg_match_all($pattern, $page, $words);
    fputcsv($file, $words[1]); // $words[1] stores the matching group in the middle of the pattern: (\w+)
}
fclose($file);
*/