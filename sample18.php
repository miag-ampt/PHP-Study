<?php
//自動キャスト
/*
 自動キャストは次のような場面で発生
・異なる型同士で演算
（よくあるので注意）

・演算子、制御構文、関数、メソッドが特定の型を必要としており、それと異なる型をを渡した場合
（自動キャストをサポートしていない場合→E_WARNIGレベルの警告）
*/

//文字列のキャスト
if ('0.0' == 0){
    echo ' "0.0"と"0"は等しいです';
}

/*
文字列0．0が浮動小数点にキャストされる
文字列0が整数型にキャストされる
上記2つの比較になるので、整数0が浮動小数点型にキャストされ0.0に
浮動小数点型の0.0と0.0を比較→結果が真

これで起こりうる危険な例は次のサンプルにて
*/
