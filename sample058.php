<?php

/*
関数の定義
関数は以下のように定義

function [&] 関数名 ([引数 [, ...]])
{
 関数の中身
}

関数の定義は、functionに続けて関数名を記述。
PHPでは、返り値や引数の型の指定はタイプヒンティングを使わない限り必要なし。
返り値に参照を用いる場合は、関数名の前に＆を用いる。

名前空間を定義していない場合、グローバルスコープに定義され、また標準のグローバル関数が多数あるため、名前の衝突に注意。
*/

//例：この関数はエラーが起きる
function abs ($num)
{
    if ($num < 0) {
        return - $num;
    }
    return $num;
}

//そこで次のように変更
function mymodule_abs($num)
{
    if ($num < 0) {
        retunr - $num;
    }
    return $num;
}

//名前空間を使う場合はグローバルな名前の衝突に気にしないで良い。名前空間については後ほど。
