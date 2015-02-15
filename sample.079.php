<?php

//コンストラクタとデストラクタ

class Employee
{
	const PARTTIME = 0x01; //アルバイト
	const REGULAR = 0x02; // 正社員
	const CONTRACT = 0x04; //契約社員


	private $name; //名前を保存するプロパティ
	private $type; //雇用形態を保存するプロパティ

	public function __construct($name, $type)
	{
		$this->name = $name;
		$this->type = $type;
	}
}

$yamada = new Employee('山田', Employee::REGULAR);
