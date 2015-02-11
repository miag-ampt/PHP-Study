<?php

// プロパティ
// プロパティはクラスの中に保持している変数のこと。

class Employee
{
    public $name; //従業員の名前を表すプロパティ
    public $state = '働いている'; //従業員の状態を表すプロパティ。デフォでは「働いている」


    public function work()
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

// 呼び出し方
$yamada = new Employee();
$yamada->name = '山田';
echo $yamada->state, $yamada->name, 'さん：';
$yamada->work();

// 働いている山田さん:
// 書類を整理しています

// オブジェクトのプロパティを外部からアクセスできる状態は望ましい状態ではないので、$stateはクラスの内側からのみアクセスできるように変更。

class Employee
{
    public $name;
    private $state = '働いている'; //privateなのでクラスの内側のみアクセス可

    private function work()
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

//すると下記はエラー
echo $yamada->state, $yamada->name, 'さん:';
$yamada->work(), PHP_EOL;


