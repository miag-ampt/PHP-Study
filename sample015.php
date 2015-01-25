<?php

//nullについて
/*
変数は以下の場合null
・定数nullが代入
・値が何も代入されていない。
・unset()されている場合
*/

//返り値を返さない関数を定義
function no_return_func() {
}

$null_value = no_return_func();

echo $null_value;


