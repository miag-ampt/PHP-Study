<?php
//三項演算子

/*
条件式 ? 式1 : 式2

三項演算子は、条件式を評価して真→式1・偽→式2
*/

$param = isset($argv[1]) ? $argv[1] : 'default';

//これと同じ
if (isset($argv[1])) {
    $param = $argv[1];
} else {
    $param = 'default';
}

