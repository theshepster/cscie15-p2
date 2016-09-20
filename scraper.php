<?php
/*
// This code is commented out to prevent it from being executed, 
// now that the wordlist has already been scraped.

$main = "http://www.paulnoll.com/Books/Clear-English/words-";

// open file
$file = fopen('wordlist.csv', 'w');
$pattern = '|(?:<li>\W*)(\w+)(?:\W*</li>)|';

// find words on each page and save it to csv
for($first_num = 1, $second_num = 2; $first_num < 30; $first_num += 2, $second_num += 2)
{
    $address = sprintf("%s%'02d-%'02d-hundred.html", $main, $first_num, $second_num);
    $page = file_get_contents($address);
    $words = array();
    preg_match_all($pattern, $page, $words);
    fputcsv($file, $words[1]); // $words[1] stores the matching group in the middle of the pattern: (\w+)
}
fclose($file);

// The below code was added after saving the file to the csv
// The csv was removed from the file directory after the below code executed

// open the csv and parse data into an array
$handle = fopen('wordlist.csv', 'r');
$wordlist = [];
while(($data = fgetcsv($handle)) !== FALSE)
{
    for ($i=0; $i < count($data); $i++)
            $wordlist[] = $data[$i];
}
fclose($handle);

// print the wordlist so it can be
// copy-pasted into a separate variable
foreach ($wordlist as $word)
    echo "\"".$word."\", ";

*/