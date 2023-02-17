<?php

/*
$alper = [
    'ad' => 'Alper',
    'soyad' => 'Catal',
    'siteler' => [
        [
            'url' => 'https://alperctl.net',
            'baslik' => 'alperctl.net - Kişisel Blog'
        ],
        [
            'url' => 'https://php.com',
            'baslik' => '$php'
        ]
    ]
];

echo json_encode($alper);
*/

$json = '{
    "ad": "alper",
    "soyad": "catal",
    "siteler": [
        {
            "url": "https://alperctl.net",
            "baslik": "alperctl.net - Kişisel Blog"
        },
        {
            "url": "https://php.com",
            "baslik": "$php"
        }
    ]
}';

//$arr = json_decode($json, true);
//print_r($arr);

//$dizi = ["alper", "catal", "test"];
//echo json_encode($dizi, JSON_FORCE_OBJECT);

$alper = file_get_contents('alper.json');
$dizi = json_decode($alper, true);

print_r($dizi);

?>