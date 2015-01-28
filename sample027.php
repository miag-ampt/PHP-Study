<?php

//比較演算子
//二項が異なる型の場合は自動的にキャストされるので注意。

//型演算子
/*
右辺が特定のクラスのインスタンスの場合に真・
ある変数が特定のクラスのインスタンスかどうかを調べる際に利用。
*/

class SomeClass
{
}
$a = new SomeClass();

if ($a instanceof SomeClass) {
     echo '$a は SomeClass のインスタンスです', PHP_EOL;
}

//特定のクラスを継承したクラスのインスタンスか。特定のインターフェイスを実装したクラスのインスタンスか。も調査可

interface FooInterface
{
}

class ParentFoo
{
}

class Foo extends ParentFoo implements FooInterface
{
}

class Bar
{
}

$a = new Foo();
var_dump($a instanceof Foo); //ture
var_dump($a instanceof ParentFoo); //ture
var_dump($a instanceof FooInterface); //ture
var_dump($a instanceof Bar); //false


