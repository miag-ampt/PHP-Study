<?php

//整数を文字列として繋げたい場合の注意

$tom = 'tom is' . 15 . 'years old'; //Tom is 15 years oldとなり意図した動作
$bob = 'bob is' . 16. 'yeas old'; //16．が浮動小数点数型とみなされ、エラーが発生

echo $tom;
echo $bob;

