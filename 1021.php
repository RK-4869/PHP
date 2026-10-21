<?php

// 案内文をデータから作ろう
/*
$duration = 6;
ダブルクォートの文字列では、{$duration}と書くと変数の値が入る。(変数展開)
echo "再生時間: {$duration}分\n";
シングルクォートでは変数展開されない。
echo '{$duration}分\n';

$workTitle = "波の記憶";
$duration = 12;
$headline = "音声ガイド: " . $workTitle;
echo $headline;
echo "\n";
*/

// 「引用符を文字として出す」
// バックスラッシュで特別な書き方をすることをエスケープという。
$duration = 8;
echo "作品名: \"灯台の音\"\n";
echo "再生時間: {$duration}分\n";

/* ヒアドキュメントの書き方。
$notice = <<<TEXT
作品名："灯台の音"
次の作品へ進みます
TEXT;
echo $notice;
echo "\n";
// 引用符が二つあるか、次の案内は別の行に出るかを確認する。
$notice = "作品名: \"灯台の音\"\n次の作品へ進みます\n";
echo $notice;
*/


