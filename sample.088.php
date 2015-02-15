<?php

//インターフェイスのチェック
//タイプヒンティング
//ex.Iteratorインターフェイスを実装したクラスのオブジェクトでなければ引数に指定することができなくなる


class Foo
{
	public function bar (Iterator $itr)
	{
		//実装は省略
	}
}
