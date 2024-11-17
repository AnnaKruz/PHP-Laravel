<?php
// Задание 1
// В контейнере с PHP CLI поменяйте версию PHP с 8.2 на 7.4. Изменится ли вывод?
$a = 5;
$b = '05';
var_dump($a == $b);                    // нестрогое сравнение (не смотрит на тип) - 7.4: bool(true), 8.2: bool(true)
var_dump((int)'012345');               // преобразование в целочисленное (0 в начале убирается) - 7.4: int(12345), 8.2: int(12345)
var_dump((float)123.0 === (int)123.0); // строгое сравнение (с учетом типа) - 7.4: bool(false), 8.2: bool(false)
var_dump(0 == 'hello, world');         // нестрогое сравнение (php8 использует более строгие правила) - 7.4: bool(true), 8.2: bool(false)

// Задание 2
// Используя только две числовые переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы
//получилось: b = 1, a = 2. Дополнительные переменные, функции и конструкции типа list() использовать нельзя.
$a = 14;
$b = 21;
print_r(['a' => $a, 'b' => $b]);
// $a ^= $b ^= $a ^= $b;
[$a, $b] = [$b, $a];
print_r(['a' => $a, 'b' => $b]);

// PS: На текущем этапе имеются некоторые проблемы с docker'ом (криво встал на систему)