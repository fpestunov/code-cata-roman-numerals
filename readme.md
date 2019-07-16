# Roman Numerals

## Условия задачи

1 => I
2 => II
3 => III
4 => IV
5 => V
6 => VI
7 => VII
8 => VIII
9 => IX one less ten
10 => X
11 => XI
12 => XII
13 => XII
15 => XV
20 => XX
30 => XXX
40 => XL
41 => XLI
44 => XLIV
50 => L
100 => C
500 => D
900 => CM
1000 => M

## Начало (подготовка)

- создаем `composer.json`
- `composer install`
- создаем класс тестирования Боулинг `vendor/ bin/phpspec describe RomanNumeralsConverter`
- запускаем тест `vendor/bin/phpspec run` и создаем класс приложения

## Приступаем к разработке

С чего начать? У нас есть ТЗ, начнем сверху. Пишем тест, потом код, чтобы тест был "зеленым".
- пишем код для расчета 1 и 2;
- пишем код универсальным и для 3;
- пишем код для 5;
