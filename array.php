<?php 

$kategoriler=[
    'siteler'=> [
        'e-ticaret' => [
            'sahibinden',
            'n11',
            'trendyol'
        ],
        'eğitim' => [
            'udemy',
            'btk akademi',
            'patika'
        ],
    ]
];

print_r ($kategoriler);

echo "<br><br>";

echo  $kategoriler['siteler']['e-ticaret']['0'];

echo "<br><br>";

echo  $kategoriler['siteler']['eğitim']['2'];

?>