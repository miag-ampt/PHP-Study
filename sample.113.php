<?php

//参照変数への再代入
$a = 10;
$ref =& $a;
$ref = 20;
echo $a, PHP_EOL; //20
