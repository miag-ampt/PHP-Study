<?php

/*
・switch
複数の条件で複雑な分岐を行いたい場合、switch構文でif-elseを繰り返すよりにスマートに記述できる。
複雑な例をまずifで
*/

$hour = date('G'); //現在の時刻を取得
if ($hour === '6') {
    echo "朝の六時です。おはようございます。", PHP_EOL;
} elseif ($hour === '12') {
    echo "正午です。こんにちは", PHP_EOL;
} elseif ($hour === '15') {
    echo "おやつのじかんです。", PHP_EOL;
} else {
    echo "どうも", PHP_EOL;
}

// switch と caseだとこのように記述できる。

$hour =date('G'); //現在の時刻を取得
switch ( $hour) {
    case '6':
        echo "朝の6じです。おはようございます。", PHP_EOL;
        break;
    case '12':
        echo "正午です。こんにちは。", PHP_EOL;
        break;
    case '15':
        echo "さんじのおやつのじかんです", PHP_EOL;
        break;
    default:
        echo "どうも"< PHP_EOL;
        break;
}

/*
===演算子を何度も記述せずにスッキリ掛ける。
switch構文は、このように$hourがcaseに続く条件式と等しくなる時にそれに続く文を実行。
どのcaseにもマッチしない場合defaultにジャンプ。

ところで、switchではマッチしたcaseブロックに入った後そのブロックにbreakがない場合、次にbreakがあるか、switchが閉じられるまですべて実行されますので注意。

この特性を利用することも可
*/

$hour = date('G'); //現在の時刻を取得
switch ($hour) {
    case '6':
        echo "六時です", PHP_EOL;
        break;
    case '12':
        echo "12時です", PHP_EOL;
        break;
    case '15':
        echo "15時です。", PHP_EOL;
        break;
    case '22':
    case '23':
    case '0' :
        echo "もう寝る時間です", PHP_EOL;
        break;
    default:
        echo "どうも", PHP_EOL;
        break;
}

