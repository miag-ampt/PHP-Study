<?php
/*
・ビット演算
ビット演算の確認はprintf()関数が便利。
右シフトした場合、シフト前の最上位ビットが0だった場合は0となり1だと1で埋められる。
*/

printf("% 032b\n", 15);
printf("% 032b\n", 51);
printf("% 032b\n", 15 & 51);
printf("% 032b\n", 15 | 51);
printf("% 032b\n", 15 ^ 51);
printf("% 032b\n", ~15);
printf("% 032b\n", 15 << 1);
printf("% 032b\n", 15 >>1);

//最上位ビットが1の場合
printf("% 032b\n", 0xf0000000 >> 1);

//ビット演算の実用的な使い方
//error_reporting()を用いてE_STRICTを含めたすべてのエラーをレポートするようにする。
error_reporting(E_ALL | E_STRICT);
