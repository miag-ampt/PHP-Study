<?php

//クラス定義時に宣言しないプロパティ
//使い予定のプロパティを予め記述していたが宣言しなくても可能。

$yamada = new Employee();
$yamada->job = 'プログラマ';

//こうすると、publicなプロパティが出来る
//しかし、他の人が分かりにくいので、宣言しておくこと。
