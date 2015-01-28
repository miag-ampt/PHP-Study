<?php

//多次元配列
/*
添字配列・連想配列にかかわらず、一次元のデータの列挙の配列でしたが、配列の値に配列を指定する多次元配列も可能。
*/

$fruits = array(
    'apple' => array(
        'price' => 100,
        'count' => 2,
    ),
    'banana' => array(
        'price' => 80,
        'count' => 5,
    ),
    'orange' => array(
        'price' => 90,
        'count' => 3,
    ),
);

foreach ($fruits as $name => $value) {
    echo "$name は1つ {$value['price']} 円で、{$value['count']} 個です", PHP_EOL;
}

