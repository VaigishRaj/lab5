<?php
function calculateArea($width, $height) {
    $area = $width * $height;
    return $area;
}

// Example usage
$width = 4;
$height = 2;
$result = calculateArea($width, $height);

echo "The area of a rectangle with a width of " . $width . " and a height of " . $height . " is " . $result . ".";
?>