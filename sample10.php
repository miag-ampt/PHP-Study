<?php
$age = 15;

$foo = <<<'EOI'
Nowdoc では、終端識別子（今回はEOI）をシングルクオートで囲みます。
複数行にわたる文章をそのまま表記することが出来ます。

トムの年齢は "$age" 歳です。
この$ageは展開されず、$ageのまま出力されます。
EOI;

class NowDocTest
{
    const DOCUMENT1 = <<<'EOI'
てすと
てすと
EOI;

    const DOCUMENT2 = <<<EOI
PHP5.3からは、変数を含まないorエスケープされて入れればヒアドキュメントもconstに指定可能。
\$foo
EOI;
}


print($foo);
echo DOCUMENT1;
echo DOCUMENT2;
