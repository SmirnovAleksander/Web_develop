<?php
// 1. вывести все данные о сервере и заголовках
echo 'Данные в глоабльном массиве $_SERVER';
foreach ($_SERVER as $key => $header) {
  echo "{$key} = {$header} </br>";
}
echo '<br>---------------<br>';

// 2. вывести время запроса
$requestTime = $_SERVER['REQUEST_TIME'];
echo "Timestamp запроса {$requestTime} <br>";

// 3.1 работа с timestamp: вывести текущее дата+время в определенном формате
// все форматы https://www.php.net/manual/ru/datetime.format.php
$now = date("Y-m-d H:i:s");
echo "Текущая дата и время: {$now} <br>";

// 3.2 работа с timestamp: вывести определенную дату и время в определенном формате
$requestDateTime = date("Y-m-d H:i:s", $requestTime);
echo "Дата и время запроса: {$requestDateTime} <br>";

$lastDay = date("H*i*s Y/m/d", 1717189199);
echo "Последний день учебы: {$lastDay} <br>";

// 3.3 работа с timestamp: превратить дату в timestamp
$timestampNow = strtotime('now');
echo "Текущий timestamp: {$timestampNow} <br>";

$timestampDatetime = strtotime($now);
echo "Текущий timestamp: {$timestampDatetime} <br>";

$timestampNextWeek = strtotime('+1 week 2 days 4 hours 2 seconds');
echo "Какой-то timestamp на след неделе {$timestampNextWeek} <br>";

// 3.4 работа с timestamp: выводим timestamp определенной даты
echo mktime(9, 24, 57, 5, 23, 1995) . '<br>';

echo '<br>---------------<br>';

// 4. вывести метод, URL и IP
$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];
$ipAddress = $_SERVER['REMOTE_ADDR'];

echo 'Method: ' . $method . '</br>';
echo 'URL: ' . $url . '</br>';
echo 'IP Address: ' . $ipAddress . '</br>';

echo '<br>---------------<br>';

// 5. Распечатаем все GET-параметры
foreach ($_GET as $key => $value) {
  echo "{$key} = {$value} </br>";
}

// 6. Распечатаем все POST-параметры
foreach ($_POST as $key => $value) {
  echo "{$key} = {$value} </br>";
}

/* 7. JSON
- создаем POST запрос
- в URL вставляем http://localhost:8080/index.php
- в body -> raw вставляем json
 {
   "username": "John",
   "email": "john@ispring.ru",
   "age": 34
 }
*/

function getPostJson(): ?string {
  $dataAsJson = file_get_contents("php://input");
  if (!$dataAsJson) {
    echo 'Не удалось считать данные! <br>';
    return null;
  }
  return $dataAsJson;
}

function getPostJsonAsArray(string $dataAsJson): array {
  $dataAsArray = json_decode($dataAsJson, true);
  if (!$dataAsArray) {
    echo 'Не удалось преобразовать JSON в массив! <br>';
    return [];
  }
  return $dataAsArray;
}

$dataAsJson = getPostJson();
if ($dataAsJson) {
  print_r($dataAsJson . '<br>');
  print_r(getPostJsonAsArray($dataAsJson));
  echo '<br><br>';
}

// 8. Сохраним JSON в файл
function saveFile(string $file, string $data): void {
  $myFile = fopen($file, 'w');
  if ($myFile) {
    $result = fwrite($myFile, $data);
    if ($result) {
      echo 'Данные успешно сохранены в файл <br>';
    } else {
      echo 'Произошла ошибка при сохранении данных в файл <br>';
    }
    fclose($myFile);
  } else {
    echo 'Произошла ошибка при открытии файла <br>';
  }
}

if ($dataAsJson) {
  saveFile('data.json', $dataAsJson);
}

/* 9. Сохраним картинку в файл
 сервис конвертирования картинки в base64 https://base64.guru/converter/encode/image
 {
   "image": "....тут base64"
 }
*/

function saveImage(string $imageBase64) {
  $imageBase64Array = explode(';base64,', $imageBase64);
  $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
  $imageDecoded = base64_decode($imageBase64Array[1]);
  saveFile("image.{$imgExtention}", $imageDecoded);
}

if ($dataAsJson) {
  $dataAsArray = getPostJsonAsArray($dataAsJson);
  if ($dataAsArray['image']) {
    saveImage($dataAsArray['image']);
  }
}
