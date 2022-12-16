<?php
//1
function double($single){
    echo $single * 2;
}

double(4);
echo "\n";

//2
function add($a ,$b){
    echo $a + $b;
}
add(1 , 3);
echo "\n";

//3
function addarr($arr){
    
}

//4
$arr = [1,2,3,4];
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($a > $max_number){
        $max_number = $a;
    }
 }

 return $max_number;
 }