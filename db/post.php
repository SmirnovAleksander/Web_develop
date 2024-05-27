<?php
function getPostsFromDB(mysqli $conn,  int $featured) {
    $sql = "SELECT * FROM post WHERE featured = $featured";
    return $conn->query($sql);
  }

function getPostFromDB(mysqli $conn,  int $id) {
    $sql = "SELECT * FROM post WHERE id = $id";
    return $conn->query($sql);
  }
function savePostToDB(mysqli $conn, array $data) {
    var_dump($data);
    $sql = "INSERT INTO post(title, subtitle, content, author, author_url, publish_date, image_url, featured) VALUES ('".$data["title"]."', '".$data["subtitle"]."', '".$data["content"]."', '".$data["author"]."', '".$data["author_url"]."', '".$data["publish_date"]."', '".$data["image_url"]."', '".$data["featured"]."')";
    return $conn->query($sql);
  }
?>