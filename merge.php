<?php
// Given arrays
$arr1 = array("pop", "rock", "hiphop");
$arr2 = array("country", "EDM");
$choice = array("favourite" => "rock", "least_favourite" => "country");

// a) Merge $arr1 and $arr2
$merged = array_merge($arr1, $arr2);
echo "<b>Merged Array:</b><br>";
print_r($merged);
echo "<br><br>";

// b) Sort the resulting array in ascending order
sort($merged);
echo "<b>Sorted Merged Array (Ascending):</b><br>";
print_r($merged);
echo "<br><br>";

// c) Sort $choice array by keys first then by values
// Sort by keys
ksort($choice);
echo "<b>Choice Array Sorted by Keys:</b><br>";
print_r($choice);
echo "<br><br>";

// Sort by values
asort($choice);
echo "<b>Choice Array Sorted by Values:</b><br>";
print_r($choice);
?>