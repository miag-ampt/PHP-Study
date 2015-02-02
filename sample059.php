<?php

/*
引数のデフォルト値
PHPの関数には引数にデフォルト値を与えられる。
引数に出来るのは、定数値のみで、演算結果を代入することは不可

引数のデフォ値は引数の定義に = で代入するように指定
*/

//挨拶文を指定しなかった場合、Hello!が使われる関数
function hello ($name, $greeting = 'Hello!')
{
    echo $greeting, $name, PHP_EOL;
}

hello('Bob', 'Good morning! '); //Good morning! Bob
hello('Tom'); //Hello! Tom

/*
関数にデフォ値を与えると、その引数を省略することが可能
このため、デフォ値を持つ引数はデフォルト値を持たない引数よりも後に定義しなければならない。
つまりこれはだめ。
*/

function hello ($greeting = 'Hello! ', $name) //デフォルト値を持っている引数が先に来ている。
{
    echo $greeting, $name, PHP_EOL;
}

