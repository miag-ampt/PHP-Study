<?php
// リソース型について
$mysql = mysql_connect('server', 'username', 'password'); //MySQLサーバへ接続
var_dump(get_resource_type($mysql)); //リソース型の種類を出力

//外部リソース専用のため、キャストすることは不可。
