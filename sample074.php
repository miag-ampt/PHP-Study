<?php

//staticプロパティ
//staticプロパティは静的なプロパティ。→クラスがインスタンス化していなくてもプロパティを読み書き可。

class Employee
{
    public $name;
    public static $company = '技術評論社';
}

echo '従業員はみんな',Employee::$company, 'に努めています', PHP_EOL;
