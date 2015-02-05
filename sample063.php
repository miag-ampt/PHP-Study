<?php

/*
・call_user_func()とcall_user_func_array()
これらのかんすうは可変す関数を用いるよりも更に高度な関数呼び出しパターンです。

これらを用いると、複雑なロジックを記述することが出来ます。

mixed call_user_func(callvack コールバック関数, [mixed 引数,...]);
mixed call_user_func_array(callback コールバック関数,array 引数のリスト);

コールバック関数に、クラスとメソッドを持つ配列を指定する場合、配列の0番目の要素にクラス名文字列orクラスのインスタンスをもつ変数、1番めの要素にメソッド名を文字列でしてします
0番目の要素にクラス名を文字列で指定できるのは、呼び出すメソッドが静的な場合のみ
*/

function add($v1, $v2)
{
    return $v1 + $v2;
}

class Math
{
    public function sub($v1, $v2)
    {
        return $v1 - $v2;
    }

    public static function add($v1, $v2)
    {
        return $v1 + $v2;
    }
}

// call_user_func()では、コールバック関数の指定に続いて、引数を指定
call_user_func('add', 1, 2); //3

//コールバック関数には無名関数も指定可能
call_user_func(function ($v1, $v2) { return $v1 + $v2;}, 1, 2); //3

// staticメソッドの場合、クラス名を文字列で指定可能
call_user_func(array('Math', 'add'), 1, 2); //3

// staticメソッドの場合、[クラス名::メソッド名]という文字列でも指定可能
call_user_func('Math::add', 1, 2); //3

// インスタンス変数とメソッド名を指定する場合
$math = new Math();
call_user_func(array($math, 'sub'), 1, 2); //-1

// call_user_func_array()では第二因数に配列で引数のリストを指定
call_user_func_array('add', array(1, 2)); //3
call_user_func_array(array($math, 'sub'), array(1, 2)); //-1

/*
call_user_func関数は可変関数とほとんど同じで、予め呼び出す関数の引数が何であるか（いくつの引数があるのか）知っている必要があり、call_user_func_array()では、引数のリストを第二引数に配列をして与えることが出kるため、呼び出す関数の実装を知らずに用いることが出来る。
*/



