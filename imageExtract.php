<?php


require 'image/vendor/autoload.php';

use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;

$palette = Palette::fromFilename('image/image.jpg');

// $palette is an iterator on colors sorted by pixel count
foreach($palette as $color => $count) {
    // colors are represented by integers
    echo Color::fromIntToHex($color), ': ', $count, "\n";
}

// it offers some helpers too
$topFive = $palette->getMostUsedColors(5);

$colorCount = count($palette);

$blackCount = $palette->getColorCount(Color::fromHexToInt('#000000'));


// an extractor is built from a palette
$extractor = new ColorExtractor($palette);

// it defines an extract method which return the most “representative” colors
$colors = $extractor->extract(5);
?>