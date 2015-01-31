<?php

/*
・continue
continue構文は、現在の繰り返し処理をとヂュウで終了し、次の繰り返し処理をする場合に用いる。

例：奇数の時にはcontinueで現在の反復処理を終了し次の処理へ。
偶数時には出力。
*/

$dice = range(1, 6);
shuffle($dice);
foreach ($dice as $value) {
    if ($value % 2 !== 0) {
       continue;
    }
    echo $value, PHP_EOL;
}
