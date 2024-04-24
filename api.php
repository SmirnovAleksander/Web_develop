<?php
$method = $_SERVER['REQUEST_METHOD'];
echo $method;

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli {
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}

function closeDBConnection(mysqli $conn): void {
  $conn->close();
}

function getPostJson(): ?string {
    $dataAsJson = file_get_contents("php://input");
    if (!$dataAsJson) {
      echo 'Не удалось считать данные!';
      return null;
    }
    return $dataAsJson;
  }
  
  function getPostJsonAsArray(string $dataAsJson): array {
    $dataAsArray = json_decode($dataAsJson, true);
    if (!$dataAsArray) {
      echo 'Не удалось преобразовать JSON в массив!';
      return [];
    }
    return $dataAsArray;
  }

  function saveFile(string $file, string $data): void {
  $myFile = fopen($file, 'w');
  if ($myFile) {
    $result = fwrite($myFile, $data);
    if ($result) {
      echo 'Данные успешно сохранены в файл';
    } else {
      echo 'Произошла ошибка при сохранении данных в файл';
    }
    fclose($myFile);
  } else {
    echo 'Произошла ошибка при открытии файла';
  }
  }

  function saveImage(string $imageBase64, string $name): string  {
    $imageBase64Array = explode(';base64,', $imageBase64);
    $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
    $imageDecoded = base64_decode($imageBase64Array[1]);
    saveFile("images/img_home/$name.{$imgExtention}", $imageDecoded);
    return "images/img_home/$name.{$imgExtention}";
  }

  $dataAsJson = getPostJson();
  
  if ($method != 'POST'){
    echo "Вы не использовали Post";
    return;
  }
   
  if ($dataAsJson) {
    $dataAsArray = getPostJsonAsArray($dataAsJson);
    if ($dataAsArray['image_url']) {
      $background = saveImage($dataAsArray['image_url'], $dataAsArray['title']);
    }
    if ($dataAsArray['author_url']) {
      $selfi = saveImage($dataAsArray['author_url'], $dataAsArray['author']);
    }
    $conn = createDBConnection();    
    $sql = "INSERT INTO post (title, subtitle, content, author, author_url, publish_date, image_url, featured) VALUES ('{$dataAsArray['title']}', '{$dataAsArray['subtitle']}', '{$dataAsArray['content']}', '{$dataAsArray['author']}', '$selfi', '{$dataAsArray['publish_date']}', '$background', '{$dataAsArray['featured']}')";  
    $result = $conn->query($sql);
  }
