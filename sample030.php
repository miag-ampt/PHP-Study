<?php

/*
三項演算子の結合規則
PHPの三項演算子の結合規則が左結合ですので、間違わないように。
特に、ネストした三項演算子は注意。
*/

$flag1 = ture;
$flag2 = false;
echo $flag1 ? 1 : $flag2 ? 2 : 0;

/*
1が出力されそうだが、実際は2が出力

$flag1が評価され真のため、最初の参考演算の評価値は1。
続いて、1が評価され、真なので、2爪の演算の結果は2となり2が出力

PHPで、三項演算子のネストは括弧を用いるべき。
ルールによっては使用禁止もあるえるので注意。
*/