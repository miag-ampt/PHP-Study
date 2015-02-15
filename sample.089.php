<?php

//型演算子
//特定の変数がインターフェイスを実装したクラスのオブジェクトであるかチェック

class Foo
{
	public function bar($itr)
	{
		if($itr instanceof Iterator === false) {
			throw new InvalidArgumentException('Interface Error');
		}
		//実装は省略
	}
}
