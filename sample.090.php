<?php

//クラスとオブジェクトの機能と特徴
//マジックメソッド

//__toString()メソッドでマジックメソッドの基本
//これは、オブジェクトを文字列にキャスト仕様とした時に呼び出される。

class Employee
{
	public function __toString()
	{
		return 'This class is: ' . __CLASS__,
	}
}

$yamada = new Employee();
echo $yamada; //This class is: Employee

//マジックメソッドはpublicで定義すること
