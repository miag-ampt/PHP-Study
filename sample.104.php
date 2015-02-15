<?php

namespace Project\Module;

// use \Directory as Directoryと等価であり、グローバルなクラスに\なしでアクセスできるようになる
use \Directory;

$dir = new Directory('./');

//別の名前空間に定義されたBazクラスを、Bazという名前でアクセスできるようにする。
use Foo\Bar\Baz;
$baz = new Baz();

