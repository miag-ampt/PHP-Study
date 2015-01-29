<?php

/*
反復時に参照を用いる
通常foreachを用いた場合、各繰り返し処理において要素は一時的な変数にコピーされますが、&を用いて要素の参照を受け取ることが出来る

foreach (反復可能なデータ構造 as &要素)
    文

参照を受け取ることで、foreachブロック内で要素に対してなされた変更は、元の配列の要素にも反映される。
*/

$fruits_color = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange'
);

foreach ($fruits_color as &$color) {
    $color = 'black';
}

var_dump($fruits_color); //すべての要素がblackになる。

/*
PHPに於いて、foreachの反復に参照を用いる事は推奨されない。
ブロックスコープが無いため、$color変数がforeachを抜けた後にも値が維持され、$fruits_colorの最後の要素への参照を持ち続けるため、思わぬ所で$fruits_colorの最後の要素を破壊することがある。
なので、反復に参照を用いるときは、unset()を用いて要素への参照を解除すること。
*/


