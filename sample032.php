<?php

//その他の演算子

//エラー制御演算子

$var = @$_GET['foo'];

//fooというパラメータが渡されようがされまいが、警告は抑制される。
//使うときは注意して使うように。


//実行演算子

$result = `grep -irn php *`;

/*
バッククオートでくくることにより、囲まれた部分がシェルのコマンドで実行され、その出力を返り値で受け取ることが出来る。
shell_exec()と同じ。

使用する際には、不特定多数の利用するアプリで、外部からの入力値をそのまま外部コマンドの実行に用いてはいけない。
外部コマンドのセキュリティについては後ほど。
*/

