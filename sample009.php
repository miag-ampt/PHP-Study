<?php
$age = 15;

$foo = <<<EOI
ヒアドキュメントでは、このように、
複数行に
そ
の
ま
ま
記載することができます。

Tomの年齢は "$age" 歳です。
EOI;

print($foo);
