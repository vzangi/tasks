<?php

$pairs = 0;
$count = 100;
$numbers = [];

echo "Числа: <br>";
for ($index = 0; $index < $count; $index++) {
	$numbers[] = floor(rand(-10, 10));
	echo $numbers[$index] . ' ';
}
echo "<br><br>Количество последовательных пар одинаковых элементов: ";
for ($index = 0; $index < $count - 1; $index++) {
	if ($numbers[$index] == $numbers[$index+1]) 
		$pairs++;
}
echo $pairs;