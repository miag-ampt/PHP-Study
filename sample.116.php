<?php

//オブジェクトの参照

$a = new stdClass();
$b = $a;

$c =& $a;

//3つとも。オブジェクトID1のオブジェクトを参照しているので、同じオブジェクトを指し示し、どの変数に変更を加えても、同じオブジェクトを変更することになる。
