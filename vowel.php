<?php
$string = "Hello World";
$vowels = 0;

$string = strtolower($string); // convert to lowercase

for ($i = 0; $i < strlen($string); $i++) {
    if (
        $string[$i] == 'a' ||
        $string[$i] == 'e' ||
        $string[$i] == 'i' ||
        $string[$i] == 'o' ||
        $string[$i] == 'u'
    ) {
        $vowels++;
    }
}

echo "Number of vowels: " . $vowels;
?>