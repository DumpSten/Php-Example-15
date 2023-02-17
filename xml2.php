<?php

header('Content-type: text/xml');
$xml = new SimpleXMLElement('<alper/>');
$xml->addChild('ad', 'alper');
$xml->addChild('soyad', 'Catal');
$siteler = $xml->addChild('siteler');
    $site = $siteler->addChild('site');
        $site->addAttribute('id', 5);
        $site->addChild('url', 'https://alperctl.net');
        $site->addChild('baslik', 'alperctl.net - Kişisel Blog');
    $site = $siteler->addChild('site');
        $site->addAttribute('id', 6);
        $site->addChild('url', 'https://php.com');
        $site->addChild('baslik', '$php');

//echo $xml->asXML();

$dizi = [
    'ad' => 'alper',
    'soyad' => 'catal',
    'siteler' => [
        0 => [
            'url' => 'alperctl.net',
            'baslik' => 'alper catal'
        ],
        1 => [
            'url' => 'php.com',
            'baslik' => '$php'
        ]
    ]
];

function array_to_xml($dizi, $xml)
{
    foreach ($dizi as $key => $val){
        if (is_array($val)){
            if (is_numeric($key)){
                $key = 'site';
            }
            array_to_xml($val, $xml->addChild($key));
        } else {
            $xml->addChild($key, $val);
        }
    }
    return $xml->asXML();
}

echo array_to_xml($dizi, new SimpleXMLElement('<alper/>'));

?>