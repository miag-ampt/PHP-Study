<?php
//型変換
/*
 どのような場面でどのような型が使われ、どういった条件で自動的なキャストが発生するか。
 型の相互変換と自動キャストの注意点
*/

echo (float)'15foo', PHP_EOL; //15
echo (float)'15.33foo', PHP_EOL; //15.33
echo (float)'1e2foo', PHP_EOL; //100(1e2)
echo (float)'foo', PHP_EOL; //0
