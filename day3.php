<?php

$input = explode(PHP_EOL, file_get_contents('Input/day3.txt'));

$remaining = $input;
$onesBucket = [];
$zerosBucket = [];

for ($i = 0; $i < strlen($remaining[0]); $i++) {
	$zerosBucket = [];
	$onesBucket = [];

	foreach ($remaining as $value) {
		if ($value[$i] == '0') {
			$zerosBucket[] = $value;
		}

		if ($value[$i] == '1') {
			$onesBucket[] = $value;
		}
	}

	if (count($onesBucket) > count($zerosBucket)) {
			$remaining = $onesBucket;
	} elseif (count($onesBucket) == count($zerosBucket)) {
		$remaining = $onesBucket;
	} else {
		$remaining = $zerosBucket;
	}

	echo '-----------------------------------------' . PHP_EOL;
	echo 'Position: ' . $i . PHP_EOL;
	echo 'Ones: ' . count($onesBucket) . PHP_EOL;
	echo 'Zeros: ' . count($zerosBucket) . PHP_EOL;
	echo 'Remaining ' . count($remaining) . PHP_EOL;
	echo '-----------------------------------------' . PHP_EOL;

	if (count($remaining) == 1) {
		echo $remaining[0] . ' - ' . bindec($remaining[0]); die;
	}
}