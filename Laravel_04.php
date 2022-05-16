<?php

//(1).引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function times2($num) {
    return $num * 2;
}
echo times2(3);
echo "\n";

//(2).$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b) {
    return $a + $b; 
}
echo add(2,3);
echo "\n";

//(3).$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function multiplyAllArrays($numbers) {
    $result =1;
    foreach($numbers as $number){
        $result *= $number;
    }
    return $result;
}
echo multiplyAllArrays(array(1,3,5,7,9,));
echo "\n";

//【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr) {
     $max_number = $arr[0];
     foreach($arr as $a){
         if ($max_number < $a){
            $max_number = $a;
         }
     //どうしたらいいかわからない・・・・
     }
    
     return $max_number;
     }
     echo max_array(array(5,3,2,7,9,12,11,23,20));
     echo "\n";

//(5).次のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//array_push
$alphabet = ["A","B"];

array_push($alphabet, "C", "D");

print_r($alphabet);

//array_merge
$vegetable1 = ["carrot", "onion", "cabbage"];
$vegetable2 = ["tomato", "pumpkin", "potatoes"];
$vegetable3 = ["broccoli", "edamame", "watermelon"];

$vegetable_merge = array_merge($vegetable1, $vegetable2, $vegetable3);

print_r($vegetable_merge);

//time, mktime
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:      ' . date('Y-m-d'); 
echo "\n";
echo 'Next Week:' . date('Y-m-d', $nextWeek);
echo "\n";
echo date("Y-m-d", mktime(0, 0, 0, 1, 1, 2022));
echo "\n";

//date
$today = date("Y-m-d");
echo $today;
echo "\n";

