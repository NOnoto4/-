<?php
//1
$name = "ono";
if ($name == "ono") {
    echo "私は あなたの名前 です。";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";

//2
$total = 0;
for ($i = 1 ; $i <= 10000 ; $i++){
    $total += $i;
}
echo $total;
echo "\n";

//3
$fruits = ["Apple","Orange","Melon","Pineapple","Banana"];
foreach ($fruits as $fruit){
    echo $fruit . "\n";
}
echo "\n";

//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . "\n";
  }
}
echo "\n";