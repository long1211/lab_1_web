
<?php
// $filename = "http://localhost/lab_1/lab_search/search_text.html";
// $text = file_get_contents($filename);
// echo (stristr($text, 'Phuong')) ? 'The text found' : 'The text not found';

$filename = "http://localhost/lab_1/lab_search/search_text.html";
$text = file_get_contents($filename);

function highlight($text, $words)
{
    preg_match_all('~\w+~', $words, $m);
    if (!$m)
        return $text;
    $re = '~\\b(' . implode('|', $m[0]) . ')\\b~';
    return preg_replace($re, '<b style="color:red">$0</b>', $text);
}

$words = 'Hello';

print highlight($text, $words);
?>