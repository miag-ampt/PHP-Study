<?php

//複合演算子
/*
代数演算子・文字列演算子・ビット演算子は代入演算子を合わせてしよう可→複合演算子
左辺と右辺を演算に掛け結果を左辺に代入
*/

//ex.$aに1を足した価を再度$aへ代入
$a = 10;
$a += 1;

echo $a,PHP_EOL; //これで、$aは11

//やっていることは $a = $a + 1; と同じ。 
