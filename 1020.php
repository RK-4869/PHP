<?php
// 作業台に必要な板を計算しよう。
$deskCount = 3;
$boardsPerDesk = 4;
$spareBoards = 2;

/* $totalBoards = $deskCount*$boardsPerDesk + $spareBoards;
echo $totalBoards;
echo "\n";

割ったあまりを求める
$weight = 7 /2;
$remaintder = 7%2;

echo $weight;
*/

// 型と値を一緒に見る
/*var_dump(7);
var_dump(3.5);
var_dump("7");
*/

// 金額の単位をそろえる
$pricePerBoard = 450;
$totalBoards = 14;
$totalPrice = $totalBoards * $pricePerBoard;

$totalBoards = $deskCount * $boardsPerDesk;
$totalBoards = $totalBoards + $spareBoards;

