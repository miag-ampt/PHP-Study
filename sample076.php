<?php
//定数
//クラス定数はメソッドやプロパティと同様にクラス内に定義することの出来る定数。
/*
class クラス名
{
    const 定数名 = 値;
}

例では、従業員の雇用形態を表す定数を定義する。
*/

class Employee
{
    const PARTTIME = 0x01; //アルバイト
    const REGULAR = 0x02; //正社員
    const CONTRACT = 0x04; //契約社員
}

//アクセウ方法　クラス名にダブルコロン
Employee::REGULAR //正社員を表す定数を取得


