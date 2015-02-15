<?php

class Programmer extends Employee
{
	public function __construct($name, $type)
	{

		parent::__construct($name, $type); // 親クラスのコンストラクタ呼び出し

		// Programmer 特有の処理の何か
	}
}
