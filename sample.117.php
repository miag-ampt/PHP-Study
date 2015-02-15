<?php

//オブジェクトが生成された時と破棄された時に出力を行うRefClassを用いてリファレンスカウントの説明をする.

class RefClass
{
	public function __construct()
	{
		echo __CLASS__, ' が生成されました', PHP_EOL;
	}

	public function __destruct()
	{
		echo __CLASS__, ' が破棄されました', PHP_EOL;
	}
}

echo 'プログラム開始', PHP_EOL;
echo 'new RefClass()', PHP_EOL;
$a = new RefClass(); //$aはrefClassオブジェクトへの参照、この時リファレンスカウントが1

echo '$b = $a', PHP_EOL;
$b = $a; //$bも$aと同じオブジェクトを指し示す参照　これで、リファレンスカウントが2

echo 'unset $a', PHP_EOL;
unset($a); //$aを破棄する。これでリファレンスカウントは1となり、$は解放するが、オブジェクトは生き残り続け、$bはそのオブジェクトを指し示す参照を保持

echo 'unset $b', PHP_EOL;
unset($b); //$bを破棄し、オブジェクトのリファレンスカウントが0になるため、オブジェクト自体が破棄される。

echo 'プログラム終了', PHP_EOL;

//結果より、オブジェクトの寿命は、「そのオブジェクトを参照するものが1つもなくなるまで」とされる。
