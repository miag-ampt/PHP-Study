<?php

//加算子・減算子
//変数に1を加えるor1引く演算を行い、結果を変数自身に代入
//演算子を前置か後置で意味が変わる。

$a = 10;

echo $a++,PHP_EOL; //10を返し、1加える
echo $a, PHP_EOL; //11
echo ++$a, PHP_EOL; //1を加え12を返す
echo $a , PHP_EOL; // 12
echo $a--, PHP_EOL; // 12を返し1を引く
echo $a, PHP_EOL; //11
echo --$a, PHP_EOL; //1を引き10を返す
echo $a, PHP_EOL; //10

