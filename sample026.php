<?php

//論理演算子
//演算対象を論理値(ture or false)で評価し、結果を論理値で返す。
//論理値型でない価に対して用いた場合は論理値に自動的にキャスト。

if (isset($agrv[1]) && $argv[1]) {
    echo '与えられた引数は真です', PHP_EOL;
}
else {
    echo '引数が与えられていないorあたえられた引数が真ではない', PHP_EOL;
}

/*
論理演算子は短絡評価
短絡評価→評価結果がわかった時点で演算結果を返す。

ex.
$flag and foo();
$flagが義であればfoo()は呼ばれない
*/
