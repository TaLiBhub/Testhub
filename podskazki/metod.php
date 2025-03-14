1. Добавление элементов

array_push() - Добавляет один или несколько элементов в конец массива.
$arr = [1, 2, 3];
array_push($arr, 4, 5);
print_r($arr); // [1, 2, 3, 4, 5]

array_unshift() - Добавляет элементы в начало массива.
$arr = [2, 3, 4];
array_unshift($arr, 1);
print_r($arr); // [1, 2, 3, 4]

2. Удаление элементов

array_pop() - Удаляет последний элемент массива и возвращает его.
$arr = [1, 2, 3];
array_pop($arr);
print_r($arr); // [1, 2]

array_shift() = Удаляет первый элемент массива и возвращает его.
$arr = [1, 2, 3];
array_shift($arr);
print_r($arr); // [2, 3]


3. Изменение и разделение массивов


array_map()	Применяет функцию к каждому элементу массива и возвращает новый массив.

array_reduce()	Сворачивает массив в одно значение, накапливая результат.

array_filter()	Фильтрует массив, оставляя элементы, удовлетворяющие условию.

sort()	Сортирует массив по значениям в порядке возрастания (ключи теряются).

array_unique() Количество уникальных элементов 

1. strlen	Длина строки	Строки	"Hello" → 5

2. strrev	Переворот строки	Строки	"Hello" → "olleH"

3. array_reverse	Переворот массива	Массивы	[1, 2, 3] → [3, 2, 1] 


HTTP методы
HTTP (HyperText Transfer Protocol) методы — это набор команд, используемых клиентом (например, браузером или API-клиентом) для взаимодействия с сервером. Каждый метод выполняет определённое действие.

Основные HTTP методы
Метод	Описание
GET	Получение данных с сервера (без изменения состояния ресурса).
POST	Создание нового ресурса на сервере.
PUT	Полное обновление ресурса.
PATCH	Частичное обновление ресурса.
DELETE	Удаление ресурса.
HEAD	Запрос заголовков ресурса без тела ответа.
OPTIONS	Получение списка поддерживаемых методов для ресурса.
