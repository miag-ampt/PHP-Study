<?php

//self
/*
特別なキーワード
クラスコンテキストの内部ではそのクラス自身を指し示すキーワード
*/

//Employeeクラスに定義されたstaticプロパティ$companyへのアクセサを定義する

class Employee
{
    public static $company = '技術評論社';

    public function getCompany()
    {
         return self::$company; //Employee::$companyと同じ
    }
}

//似ているキーワードで親クラスを表すparent 遅延性的束縛でstatic
