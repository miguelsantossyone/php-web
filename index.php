<?php

// Function to generate a random color in hexadecimal format
function random_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

// Generate a random color
$color = random_color();

// Output the HTML with inline CSS to change the color dynamically
echo '<div style="color: ' . $color . '">';
echo 'Hello ' .$_ENV["USER"] . '!';
echo '</div>';

?>
