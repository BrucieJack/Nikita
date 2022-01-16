<?php

//1

$num = 0;

while ($num <= 100) {
    printf("$num ");
    $num++;
}

$num = 0;

while ($num <= 100) {
    if ($num % 2 === 0 && !($num % 3 === 0)) {
        printf("$num ");
    }
	$num++;
}

//2

$array = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];

foreach ($array as $key => $value) {
	if (!($key % 2 === 0) && !($value % 5 === 0)) {
		printf("$value ");
	}
}

//3

$num = 0;

while ($num < 10000) {
	if ((substr_count($num, 3) > 0) && !($num % 5 === 0)) {
		printf("$num ");
	}
	$num++;
}

//4

$result = [];

for ($i=0; $i < 15 ; $i++) {
	$a = $i*$i; 
	array_push($result, $a);
}

print_r($result);

//5

$a = rand(0, 100);

$b = rand(0, 100);

while ($a === $b) {
	echo("KEKW");
	$b = rand(0, 100);
}

$c = rand(0 ,100);

while ($a === $b && $b === $c && $c === $a) {
	echo("KEKW");
	$c = rand(0, 100);
}

echo("$a $b $c");

//6

$arr =[
	'one'=> 123,
	'two' => '123',
	'three' => '12 3',
	'four' => 120 + 3
];

$keys = [];

foreach ($arr as $key => $value) {
	if ($value === 123) {
		array_push($keys, $key);
	}
}

print_r($keys);

print_r(array_keys($arr, 123));

//7

$arr = [1, 2, 3, 6, 7, 12, 67, 45];
$sum = 0; 
$com = 1;

for ($i=0; $i < count($arr); $i++){ 
	$sum = $sum + $arr[$i];
	$com = $com * $arr[$i];
}

echo("$sum  $com");

//8

$arr = [1, true, '1', 'false', 'true', 0, null];
$var = 1;

foreach ($arr as $key => $value) {
	if ($value === $var) {
		echo "YES";
		break;
	}else {
		echo "NO";
	}
}

if (in_array(1, $arr)) {
	echo "YES";
}else {
	echo "NO";
}

//9

$arr = [1, 2, 3, 6, 7, 12, 67, 45];

$maxKey = (array_keys($arr, max($arr)))[0];
$minKey = (array_keys($arr, min($arr)))[0];

$max = max($arr);
$min = min($arr);

$arr[$maxKey] = $min; 
$arr[$minKey] = $max;

print_r($arr);

//10

$n = 10;

$arr = [0, 1];

for ($i=2; $i < $n ; $i++) { 
	array_push($arr, ($arr[$i-1] + $arr[$i-2]));
}

print_r($arr);

//11

$arr = [1,2,4,4,2,5];

$a = count($arr);

$arr = array_unique($arr);

$b = count($arr);

sort($arr);

print_r($arr);

$result = $a - $b;

echo($result);



//12

$flag = 0;


for ($i=100000; $i < 1000000; $i++) { 
	$a = substr($i, 0, 1);
	$b = substr($i, 1, 1);
	$c = substr($i, 2, 1);
	$d = substr($i, 3, 1);
	$e = substr($i, 4, 1);
	$f = substr($i, 5, 1);

	$x = $a + $b + $c;
	$y = $d + $e + $f;

	if ($x === $y) {
		echo("$i   ");
		$flag++;
	}
}

echo("     $flag    ");

$result = ($flag/900000)*100;

echo("     $result     ");

//13

function isMagic($arr) {
    $i = 0;
    while($i < count($arr)){
        if($i === $arr[$i]){
            return $i;
        }
        $i++;
    }
    return -1;
}

$arr = [];
for ($i=0; $i < 100; $i++) { 
    $arr[$i] = rand(1, 100);
}
$arr = array_unique($arr);
asort($arr);
$result = isMagic($arr);

echo($result);

//14




