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
    'four' => 120 +3
];

