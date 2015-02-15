<?php

// finalキーワード

class Employee
{
	public $salary = 20;

	public final function getSalary() //給料を取得するメソッド
	{
		return $this->salary;
	}
}

class Programmer extends Employee
{
	//メソッドをオーバーライドしてみて、プログラマの給料を2倍にしてみる。finalつけているからエラーが起きるけれど
	public function getSalary()
	{
		return $this->salary * 2;
	}
}
