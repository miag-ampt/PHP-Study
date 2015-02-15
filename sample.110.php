<?php

//例外の拡張
//ゼロ除算の例外をExceptionクラスで表現したが、新たにゼロ除算の例外を作成する


class ZeroDivisionException extends Exception
{
}

function div ($v1, $v2)
{
	if($v2 === 0) {
		throw new ZeroDivisionException("arg #2 is zero."); //例外を投げるコード
	}
	return $v1/$v2;
}

try {
	echo div(1, 2), PHP_EOL;
	echo div(1, 0), PHP_EOL;
	echo div(2, 1), PHP_EOL;
} catch (ZeroDivisionException $e) {
	echo 'Zero Division Exception!', PHP_EOL;
	echo $e->getMessage(), PHP_EOL;
} catch (Exception $e) {
	echo $e->getMessage(), PHP_EOL;
}