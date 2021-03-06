<?php

・定義済み関数
PHPには定義済み関数が多くある。
実際には、二種類の関数がある。

・・組み込み関数
PHPの使える環境ならば、どのような環境でも利用することのできる関数。
array_map(),call_user_func_array()等

・・拡張機能によって定義される関数
拡張機能は、後からインストールすることの出来るものと、PHPをインストールする際に、configureオプションによって組み込まれるもの
どちらもPHPを実行するときには定義されており、requireなどをすこととなく、どのスコープからも呼べる.
PHPの組み込み関数と拡張期についてはまた後ほど
/*

/*
・定義済み関数を調べる
どのような関数が定義されているかは、get_defined_functions()で取得可。
internalとuserの2つのキーを持つ連想配列。
それぞれの値は関数名の入った配列(fig.4.1)
組み込み関数・拡張機能によって定義される関数は、internalの一覧に含まれている。
自分でfunctionキーワードを用いて定義した関数はuserの方に含まれる。
*/

/*
・関数と言語構造
PHPには、一見カンスのように使うことの出来る言語構造がある。
isset(),unset(),empty(),list()等など
これらが言語構造である理由は、これが言語楮でしか実現出来ない機能を実現しているから。
isset()はある変数が定義されているかどうかをチェックしているもので、これは関数の仕組み上では不可。
もっとも身近なものはechoやprint。言語構造であるため、echoやprint分hカッコを付けなくてもつかえるし、文の対象をカンマで区切ることも可能。
echo 1,2,3,4,5 PHP_EOL; //12345

言語構造は文法の江では関数のように使えるが、実際に関数ではないため可変関数に使用したりコールバック関数に使用することは出来ない。
PHPManには、「これは言語構造です」と書かれている。

