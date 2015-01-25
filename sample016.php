<?php
//unset()を用いて変数をnullへキャスト

$var = 1;
var_dump(isset($var)); //ture $varは定義済み

$var = null;
var_dump(isset($var)); //false $varはnullのためセットされていないとされる
var_dump($var); //null $varはnull

//unset
unset($var);
var_dump(isset($var)); //false $varはunset()されている
var_dump($var); //unsetされたため、Noticeが発生。値としてはnull
