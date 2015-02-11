<?php

// $this
// $thisは自分自身のオブジェクトの参照。

// さっきのsampleでprivateに変更した、$stateを変更するメソッドと取得するメソッドを実装。

class Employee
{
    public $name;
    private $state = 'はたれいている'; //privateなので、クラスの内側のみアクセス可


    public function getState() //privateなプロパティにアクセスするメソッド
    {
        return $this->state;
    }

    public function setState($state) //privateのプロパティを変更するメソッド
    {
        $this->state = $state;
    }

    public function work()
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

// これで$stateプロパティに$thisを用いてアクセス可能

$yamada = new Employee();
$yamada->name = '山田';
$yamada->setState('休憩している');
echo $yamada->name, 'さんは', $yamada->getState(),PHP_EOL;
//山田さんは休憩している。
