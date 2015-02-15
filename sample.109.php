<?php

//例外
//ゼロ除算が発生したとkに例外を発生させるコード

function div($v1, $v2)
{
	if ($v2 === 0) {
		throw new Exception(arg #2 is zero."); //例外を投げるコード
	}
	return $v1/$v2;
}

try {
	echo div(1, 2), PHP_EOL; //例外が発生する原因の箇所
	echo div(1, 0), PHP_EOL;
	echo div(2, 1), PHP_EOL;
} catch (Exception $e) { //Ecveption例外クラスの補足
	echo 'Exception', PHP_EOL;
	echo $e->getMessage(), PHP_EOL;
}
