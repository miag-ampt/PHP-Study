<?php
// stringcast.php
// php stringcast.php 100 を実行。

//引数が指定されていなければ終了
if (!isset($argv[1])) {
    exit;
}

//引数の100は文字列型として渡される。
$num = $argv[1];

//文字列100と整数100が比較去るため、文字列100は整数100にキャストされ比較演算される。
if($num == 100) {
    echo "num is 100",PHP_EOL;
} else {
    echo "num is not 100",PHP_EOL;
}

// よって、整数同士を比較しているつもりでも、実際には文字列と整数の比較が行われ、文字列にキャストが発生していることを把握しておくこと
// 引数として期待している型が決まっていたら明示的にキャスト・厳密な比較演算子を用いること.

// 意図しないキャストが発生し、それ故に意図しない挙動を取るプログラムを書かないように。そのためには、自動キャストをしっかり把握し、場合に応じて明示的なキャストを行う癖をつける。

