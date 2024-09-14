<?php


$array123 = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);

$array11 = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);

foreach ($array11 as $value) {
	// code...
print_r($value);

}

// Объявляем массив
$array = [
    "apple",
    "banana",
    "cherry",
    "date",
    "elderberry"
];

// Выводим индекс и значение каждого элемента
for ($i = 0; $i < count($array); $i++) {
    echo "Индекс: $i, Значение: " . $array[$i] . "\n";
}
