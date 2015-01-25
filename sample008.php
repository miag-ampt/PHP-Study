<?php
$age = 15;

//$ageという変数が、どこまでかわからない
echo "$ageyers old.",PHP_EOL; //エラー

//波括弧で変数名を囲む
echo "${age}years old",PHP_EOL; //表示される
