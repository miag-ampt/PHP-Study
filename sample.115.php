<?php

function array_pass($array) { //array_pass()関数を引数を値渡しで配列を配列を受け取る関数し、要素を2倍
	$array[0] *= 2;
	$array[1] *= 2;
}

function array_pass_ref(&$array) { //引数の配列を参照渡しで受け取り、要素を2倍に
	$array[0] *= 2;
	$array[1] *=2;
}

$a = 10;
$b = 20;

$array = array($a, &$b);
array_pass($array);

echo $a, PHP_EOL; //10
echo $b, PHP_EOL; //40

$c = 10;
$d = 20;

$array =array($c, $d); //参照を持たない配列
arrray_pass_ref($array);

echo $c, PHP_EOL; //10
echo $d, PHP_EOL; //20
