<?php

echo "Введіть своє ім'я: ";
$name = fgets(STDIN); // Читаємо введене ім'я з консолі
$name = trim($name); // Видаляємо зайві пробіли та символи нового рядка

echo "Привіт, $name!\n";