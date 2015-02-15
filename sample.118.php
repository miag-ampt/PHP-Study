<?php

//変数のリファレンスとコピーオンライト

$a = 1; //$aを整数1で初期化
$b = $a; //参照による代入を使っていないので、コピーされているかのように思われるが、$bは$aの参照を保持

//続いて
$b = 2;
//があった場合、参照ならば、$aも2になるはずだが、そうとはならない。
//これがコピーオンライト。
//その変数が変更されるまでは参照として扱われる。

