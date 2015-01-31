<?php

/*
・break
for,foreach,while,do-while,switchのブロックから抜けるために使う。
特定の条件時に反復を終わらせたい場合などに使用。

例：1−6のサイコロを$dice変数として初期化した後、シャッフル。
6が出るまで値を出力し、このようにbreakを用いることで、反復処理を途中で止めることが可能
*/

$dice = range(1, 6);
shuffle($dice);
foreach ($dice as $value) {
    echo $value, PHP_EOL;
    if ($value === 6) {
        break;
    }
}

