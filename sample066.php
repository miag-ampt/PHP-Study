<?php

/*
クロージャ
変数の名前解決が、ローカルスコープだけでなく関数が適宜された場所のすこーぷも含めて行われる関数のこと。
PHPでは無名関数を定義する際に、use()を用いて、かんすうないで利用する変数を指定する。
*/

$my_pow = funcition($times = 2)
{
    return function ($v) use (&$times)
    {
    return pow($v, $times);
    };
};

//$my_powに定義した無名関数は、引数に受け取った$times分べき乗を行う関数を生成します。
//次のように利用すれば、$cube 変数には3条を行う関数が定義されます

$cube =$my_pow(3);

/*
$my_powに定義された無名関数に渡した引数の3は関数の中で$times変数として扱われ返り値とする無名関数にuse構文を通して渡されます。
use構文を用いることで、この関数が定義された環境である$my_powのローカルスコープの$times変数を参照し組み込みのpow()関数の引数に使われます
*/

echo $cube(1), PHP_EOL; //1
echo $cube(2), PHP_EOL; //8
echo $cube(3), PHP_EOL; //64
echo $cube(4), PHP_EOL; //512
