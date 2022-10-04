<?php

require 'vendor/autoload.php';
require 'Database.php';

$db = new Database();

function request($query)
{
    $url = "https://search.wb.ru/exactmatch/ru/common/v4/search?dest=-1029256,-51490,-181345,123585705&emp=0&lang=ru&locale=ru&query={$query}&resultset=catalog";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    var_dump($resp);
    return json_decode($resp, true);
}


