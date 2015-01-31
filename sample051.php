<?php

/*
・return
returnは関数やメソッドから値を返し、呼び出し元に戻ることを意味する。
returnの使い方は4.2.1にて

・exit
exitはプログラムの実行を終了するときに使用。
記述された時点で、プログラムの実行は直ちに終了。
*/

echo "start", PHP_EOL;
exit;

echo "end", PHP_EOL; //これは出力されない

//この構文は関数のように、終了ステータスを呼び出すことも可能。

echo "start", PHP_EOL;
exit(255); // シェルの終了ステータスが255になる
echo "end", PHP_EOL;


