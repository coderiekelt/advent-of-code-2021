<?php

$input = explode(PHP_EOL, file_get_contents('Input/day1.txt'));

$count = 0;

$prog = 0;
$sums = [];

while ($prog < count($input)) {
	if (!array_key_exists($prog + 2, $input)) {
		break;
	}

	$sums[] = array_sum([$input[$prog], $input[$prog + 1], $input[$prog + 2]]);

	$prog++;
}

foreach ($sums as $index => $value) {
	if (!array_key_exists($index - 1, $sums)) {
		continue;
	}

	if ((int)$value > (int)$sums[$index - 1]) {
		$count++;
	}
}

echo $count;