<?php

$input = explode(PHP_EOL, file_get_contents('Input/day2.txt'));

$depth = 0;
$horizontal = 0;
$aim = 0;

foreach ($input as $value) {
	$parameters = explode(' ', $value);

	$instruction = $parameters[0];
	$argument = (int)$parameters[1];

	switch ($instruction) {
		case 'forward':
			$horizontal += $argument;
			$depth += $aim * $argument;
			break;
		case 'down': 
			$aim += $argument;
			break;
		case 'up':
			$aim -= $argument;
			break;
		default:
			break;
	}
}

echo $depth . PHP_EOL;
echo $horizontal . PHP_EOL;
echo $depth * $horizontal;