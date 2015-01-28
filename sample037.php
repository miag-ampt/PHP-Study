<?php

/*
配列のキーがセットされているか調べる

PHPにはarray_key_exists()という関数がある。
引数に、検索したいキーと検索対象の配列を渡すと、キーが含まれているかどうかを理論値で返す。

実は,isset()を使っても調べられる。
*/

$array = array('hoge' => 1, 'fuga' =>2,);
array_key_exists('hoge', $array); //ture
isset($array['hoge']; //ture

/*
array_key_exists()は、引数に渡したキーを、そのキーgあ見つかるか配列を全て調べ終わるまで要素をチェックする。
しかし、isset()は、そのキーの要素がセットされているかどうかだけをチェックするので、より早くチェック可。

ただし、isset()はキーが存在し、値がnullの場合はfalseを返し、array_key_exists()はキーが値がnullでもtureとなる。

利用シーンによって使い分けると良い
*/

