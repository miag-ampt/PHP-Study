<?php

//インターフェイス
//値を書き込む操作と読み込む操作を必要とするインターフェイスを定義し、設定ファイルを管理するようなクラスで実装


interface Reader
{
	public function read();
}

interface Writer 
{
	public function write($value);
}

class Configure implements Reader, Writer
{
	public function write($value)
	{
		//書き込みの処理
	}


	public function read()
	{
		//読み込みの処
	}
}

