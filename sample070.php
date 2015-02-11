<?php

//インスタンスの生成と使い方

//workメソッドを持つ、Employeeクラス
class Employee //classを用いてクラス宣言
{
    public function work() //メソッドにはアクセス修飾詩publicに続けてfunctionキーワード・メソッド名を記述し{}内にメソッドの中身
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

//クラスを使う

$yamada = new Employee(); //newを使ってクラスをインスタンス化
$yamada->work(); //メソッドの呼び出しには->アローを使う
$suzuki = $yamada; //$yamadaにはEmployeeオブジェクトの参照が代入されているので、$suzukiも$yamadaも同じオブジェクトを指す変数

//コピーされた変数に対する変更はコピー元の変数にも影響。複製するには
$suzuki = clone $yamada;

