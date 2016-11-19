<?php
$searchQuery = $_GET['query'];

$words = explode(' ', $searchQuery);
$finalIndex = count($words) - 1;

// You may store the names in an array using the commented lines. (untested)
// $names = [];

foreach (range(0, $finalIndex - 1) as $firstIndex) {
    array_map('print_name',
        array_fill(0, $finalIndex - $firstIndex, $firstIndex),
        range($firstIndex + 1, $finalIndex));

    // $newNames = array_map('assemble_name',
    //     array_fill(0, $finalIndex - $firstIndex, $firstIndex),
    //     range($firstIndex + 1, $finalIndex));
    // array_merge($names, $newNames);
}

function print_name($firstIndex, $lastIndex) {
    global $words;
    $fn = trim($words[$firstIndex]);
    $ln = trim($words[$lastIndex]);
    if ($fn != '' && $ln != '') {
        echo $fn . ' ' . $ln . '<br />';
    }
}
?>
