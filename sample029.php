<?php

//三項演算子の省略記法
/*
条件式 ?: 式1

条件式が真の場合は条件式の評価値を、偽の場合は式1の評価値を返す。
*/

function some_func() {
    $val =... //DBより何かしらのデータを取得するロジック。失敗したらfalseに相当するものが返る。
    return $val;
}

$result = some_func() ? some_func() : 'default'; //これを書き直す。

$result = some_func() ?: 'default'; //some_func()を2度呼び出す必要がなくなる。
