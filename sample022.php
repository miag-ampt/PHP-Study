<?php
//文字列演算子
//2つの文をドットで繋げば、2つを合わせた文字列に。

$age = 15; //整数型
$tom = 'Tom is ' . $age . 'years old '; //$ageが文字列型にキャストされ、すべてを文字列として連結

echo $tom,PHP_EOL; //Tom is 15 years old.
