<?php

/*
foreach
foreachは、配列やlteratorインターフェイスを実装したクラスのオブジェクトなど、反復可能なデータ構造を順番に処理するための制御構造。
foreachを用いると、配列の要素を先頭から順に出力するような処理を簡単に記述できる。

foreach (反復可能なデータ構造 as 要素)
    文
*/

$array = array(1, 2, 3, 4, 5,);
foreach ($arrray as $value) {
    echo $value,PHP_EOL;
}

/*
最初に初期化した変数$arrayを先頭から最後の要素に辿り着くまでforeachブロックの中を繰り返す。
書く繰り返し初折において、現在の要素が変数$valueに格納される。

foreachは反復時に現在のキーを取得できる。

foreach (反復可能なデータ構造 as キー => 要素)
    文
*/

$fruits_color = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
);

foreach ($fruits_color as $name => $color) {
    echo "$name is $color", PHP_EOL;
}

//注意：PHPにはブロックスコープが無いのでこのように生成された変数$nameと$colorはforeachブロックを抜けた後も生き残っています。
