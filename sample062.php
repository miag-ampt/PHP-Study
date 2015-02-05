<?php

/*
・可変関数
可変関数のように関数も、関数名の代入された変数を使って呼び出せる。
可変関数はクラスのメソッドにも適用できるため、ある関数群を呼び出すための関数を作成したりなど、よりメタなプログラミングを可能にします。
*/

// 引数に与えられた名前を持つ関数が存在すれば呼び出すための関数
function func_caller($name)
{
    if (function_exists($name)) {
        $name(); //可変関数として関数の呼び出し
    }
}

function foo()
{
    echo "foo called", PHP_EOL;
}

func_caller('foo'); // foo called

/*
この例では、'foo'という引数を指定して、func_caller()を呼び出している。
func_caller（）ではまず、組み込みのfunction_exists()を用いて、その関数が存在するかどうかのチェックを行う。
そして、$name()では、まず$name変数が評価されこの変数が文字列fooであることがわかり、続いてこの文字列を識別子とみなしfoo()関数が呼び出される
*/
