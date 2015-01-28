<?php

//連想配列
/*
要素に名前をつけて、そのキーでアクセスする配列→連想配列

array([キー => 要素[, ...]])
*/

$fruits_color = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
);

echo $fruits_color['banana'], PHP_EOL; //yellow

//連想配列と添字配列を混ぜてもOK

$fluits_mixed = array(
    'peach',
    'blueberry',
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
);

echo $fruits_mixed[1],PHP_EOL; //blueberry
echo $fruits_mixed['banana'],PHP_EOL; //yellow


//初期化時にキーが重複している場合。
$array = array(
    4,
    5,
    1 => "これは1", //キーが1の要素(ここでは5)が上書きされる。
    'string_key' => '最初の定義',
    'string_key' => '次の定義' //string_keyが上書きされる。
);

var_dump($array);


/*
配列のきーとして用いることが出来るのは、整数と文字列のみ。

論理型・浮動小数点数型・nullも用いることができるが、
ture→整数の1
false→整数の0
浮動小数点数型→小数点以下は切り捨て、整数に丸められる
null→空文字列
となる
*/
*/
