<?php

// オーバーライド

class Programmer extends Employee
{
	public function work()
	{
		echo 'プログラムを書いています' ,PHP_EOL;
	}
}
