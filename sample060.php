<?php

/*
タイプヒンティング
PHPの関数は引数や返り値に型を指定しないため、どのような変数でも引数に渡すことが出来る。
しかし、限定したい場合はタイプヒンティングという方法をもちいい、引数に渡されるべき値を特定のクラスor配列に限定することが出来る。
型は各引数の定義の直前に、クラス名or arrayを指定する。
関数が指定された型ornull以外が渡されるとエラーが起きる。
*/

function array_output ( array $var )
{
    if (is_array($var)) foreach ($var as $v) {
    echo $v, PHP_EOL;
    }
}

//この関数は配列を受け取り、配列の中身を一行ごとに出力する関数
//タイプヒンティングを指定しているので、配列以外を渡すとエラーが起きる。

$array = array(1,2,3,);
array_output($array);
array_output(1); //エラー
