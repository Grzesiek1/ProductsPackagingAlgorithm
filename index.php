<?php

const MAXIMUM_PACKAGE_WEIGHT = 10;

// Products along with their weight
$products = [
    'cola' => 5,
    'piwo' => 10,
    'sok' => 8,
    'herbata' => 1,
    'banany' => 4,
    'warzywa' => 4,
    'tymbark' => 2,
    'tryskawki' => 3,
    'orzechy' => 8,
    'chipsy' => 2,
    'jablka' => 4,
    'mandarynki' => 10,
    'woda' => 1,
    'maslo' => 9,
    'lego' => 2,
];

var_dump($products);

$packageWeight = 0;
$packageNumber = 0;
$purchases = [];

while ($products) {
    foreach ($products as $productName => $productWeight) {
        if ($packageWeight + $productWeight <= MAXIMUM_PACKAGE_WEIGHT) {
            $purchases[$packageNumber][$productName] = $productWeight;
            $packageWeight += $productWeight;
            unset($products[$productName]);
        }
    }
    $packageWeight = 0;
    $packageNumber++;
}

var_dump($purchases);
echo 'Packages: <b>' . count($purchases) . '</b>';