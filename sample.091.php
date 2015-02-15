<?php

//オーバーロード
//様々なマジックメソッドをクラスに定義した際、それぞれのメソッドがどのようなタイミングで呼び出されるのか、それぞれのメソッドが呼び出された時に、
//出力を行うマジックメソッドを定義したクラスを用いて説明

class SomeClass
{
	private $values = array(); //privateな値を保存するコンテナ

	//private なコンテナへのアクセサ
	public function __get($name)
	{
		echo "get: $name", PHP_EOL;
		if (!isset($this->values[$name])) {
			throw new OutOfBoundsException($name . " not found .");
		}
		return $this->values[$name];
	}

	//privateなコンテナへのアクセサ（setter）
	public function __set($name, $value)
	{
		echo "set: $name setted to $value", PHP_EOL;
		$this->calues[$name] = $value;
	}

	public function __isset($name)
	{
		echo "isset: $name", PHP_EOL;
		return isset($this->values[$name]);
	}

	public function __unset($name)
	{
		echo "unset: $name", PHP_EOL;
		unset($this->values[$name]);
	}

	public function __call($name, $args)
	{
		echo "call: $name", PHP_EOL;

		//アンダースコアをつけて、メソッド名とする
		$methosd_name = '_' . $name;
		if (!is_callable(array($this, $method_name))) {
			throw new BadMethodCallException($name . "method not found. ");
		}

		return call_user_func_array(array($this, $method_name), $args);
	}

	public static function __callStatic($name, $args)
	{
		echo "callStatic: $name", PHP_EOL;

		$method_name = '_"  . $name';
		if (!is_callable(array('self', $method_name))) {
			throw new BadMethodCallException($name . "method not found.");
		}
		return call_user_func_array(array('self', $method_name), $args);
	}

	private function _bar($value)
	{
		echo "bar called with arg '$value'", PHP_EOL;
	}

	private static function _staticBar($value)
	{
		echo "staticBar called with arg '$value'", PHP_EOL;
	}
}

$obj = new SomeClass();
$obj->foo = 10;

//fooは宣言されていないプロパティなので__set()メソッドが呼び出される。
//$value配列に10が渡される

var_dump($obj->foo);

//fooは宣言されていない。さっきのはプロパティが作成されたわけではなく、privateコンテナに代入されただけ。
//アクセス可不野菜プロパティの取得を行ったので__get()メソッドが呼び出される。

var_dump(isset();$obj->foo);
var_dump(empty($obj->foo));

//略

$obj->bar('baz');
SomeClass::staticBar('baz');
