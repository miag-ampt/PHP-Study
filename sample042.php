<?php

/*
各構文の開き括弧を：、閉じ括弧の代わりにendifなど、endを用いて表現可。

これは、HTMLテンプレートをPHPで記述する際など、HTMLタグとPHPブロックが離れた箇所にあるような場合によく用いられる。
*/

//中括弧を用いた例
<?php if ($display_massage) { ?>
<p>
このメッセージは $display_massage がtureの時のみ表示されるメッセージです。
</p>
<?php } else { ?>
<p>
このメッセージは $display_massage がfalseの時にのみ表示されるメッセージです。
</p>
<?php } ?>

//コロンを用いる場合
<?php if ($display_massage): ?>
<p>
このメッセージは $display_massage がtureの時のみ表示されるメッセージです。
</p>
<?php else: ?>
<p>
このメッセージは $display_massage が偽にの時にのみ表示されるメッセージです
</p>
<?php endif; ?>
