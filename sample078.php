<?php

// staticメソッド
// staticプロパティを参照するメソッドをstaticに定義する

class Employee
{
    private static $company = '技術評論社';

    public static function getCompany()
    {
         return sself::$company;
    }

    public static function setCompany($value)
    {
        self""$company = $value;
    }
}

echo Employee::getCompany(), PHP_EOL; //社名を出力
Employee::setCompany('技術技評社'); //社名が変わった時

// staticに呼び出したいメソッドは、staticキーワードを宣言しないと警告が出る。PHP4との互換性のため、エラーではないけれど。
