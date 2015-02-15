<?php

namespace Project\Module;
use Project\Module2 as Another;

$class_name = 'Another\SomeClass'; //文字列のため、コンパイル時の変換ができない
$obj = new $class_name() //new AnotherModule\SomeClass()となり、名前解決ができない
