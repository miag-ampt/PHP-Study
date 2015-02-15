<?php

namespace Project\Module;

//下記ファイルにクラスが定義されているものとする。
require_once 'Foo/Bar/Baz.php'; //Foo\Bar\Bazクラス
require_once 'Hoge/Fuga.php'; //Hoge\Fugaクラス
require_once 'Module/Klass/Some.php'; //Modul\Klass\Someクラス

use Foo\Bar as BBB;
use Hoge\Fuga;

class Piyo {}

$obj = new \Directory(); //完全修飾なので、グローバルのDirectoryクラス
$obj2 = new BBB\Baz(); //エイリアスに基づいてコンパイル時にFoo\Bar\Bazクラスになる
$obj3 = new Fuga(); //インポートルールにもとづいてコンパイル時にHoge\Fuga くらすとなる
$obj4 = new Klass\Some(); //修飾名で該当するインポートルールが無いので、コンパイル時に現在の名前空間である、Project\Moduleが先頭に付けられ、Project\Module\Klass\Someクラスと解釈される

$obj5 = new Piyo(); //非修飾名で該当するインポートルールが無いため、コンパイル次の変換はない。
		    //実行時には現在の名前空間が先頭に付与され,Project\Module\Piyoクラスと解釈
some_func(); //実行時に、Project\Module\Some_func()関数を探して、なければ、グローバル関数を実行

BBB\SOME_CONST; //コンパイル時にFoo\Bar\SOME_CONST定数に変換される

SOME_CONST; //実行時にPRoject\Module\SOME_CONSTがなければ、グローバルの SOME_CONST定数が評価される
