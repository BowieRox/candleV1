<?php
// Get the label text from the URL query parameters
$labelText = isset($_GET['label']) ? $_GET['label'] : '';

// Load the candle image
$candleImage = imagecreatefromjpeg('candle.jpg');

// Set up the font and label text color
$font = 'arial.ttf';
$labelTextColor = imagecolorallocate($candleImage, 255, 255, 255);

// Add the label text to the image
imagettftext($candleImage, 40, 0, 200, 300, $labelTextColor, $font, $labelText);

// Output the image to the browser
header('Content-Type: image/jpeg');
imagejpeg($candleImage);

// Clean up
imagedestroy($candleImage);
?>
