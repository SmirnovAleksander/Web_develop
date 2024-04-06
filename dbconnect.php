<?php

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli 
{
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }

  echo "Connected successfully<br>";
  return $conn;
}

function closeDBConnection(mysqli $conn): void 
{
  $conn->close();
}
function getPostsFromDB(mysqli $conn,  int $featured) {
    $sql = "SELECT * FROM post WHERE featured = $featured";
    return $conn->query($sql);
  }

function getPostFromDB(mysqli $conn,  int $id) {
    $sql = "SELECT * FROM post WHERE id = $id";
    return $conn->query($sql);
  }


$conn = createDBConnection();
if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $sql = "SELECT * FROM post WHERE ID = {$_GET['id']}";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "ID: {$row['post_id']} - Title: {$row['title']} - Subtitle: {$row['subtitle']} - Date: {$row['publish_date']} - Is Featured: {$row['featured']} <br>";
      }
    }
  else
  {
    header("location: http://localhost:8001/home");
    exit();
  }
}
closeDBConnection($conn);

?>
