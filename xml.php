<?php

# XML
# eXtensible Markup Language

$xml = '<?xml version="1.0" encoding="UTF-8" ?>
<alper>
    <ad>Alper</ad>
    <soyad>Catal</soyad>
    <siteler>
        <site id="5">
            <url>https://alperctl.net</url>
            <baslik>alperctl.net - Kişisel Blog</baslik>
        </site>
        <site id="6">
            <url>https://php.com</url>
            <baslik>$php</baslik>
        </site>
    </siteler>
</alper>';

$xml = simplexml_load_string($xml);

print_r($xml);

?>