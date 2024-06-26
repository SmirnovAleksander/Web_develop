<?php

$id = $_GET["id"];

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

function getAndPrintPostsFromDB1(mysqli $conn): void
{
    global $id;

    $sql = "SELECT * FROM post WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            include 'sample_post.php';
        }
    } else {
        echo "0 results";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8001/static/styles/post.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <script src="../js/burgerMenu.js" defer></script>
    <title>Lab_1</title>
</head>

<body>
    <header>
        <div class="header-wrapper">
            <div class="header-conteiner">
                <div class="escape-header">
                    <img src="http://localhost:8001/static/images/img_post/Escape.svg" alt="Escape.">
                </div>
                <nav class="top-list head-edit">
                    <ul>
                        <li>
                            <a href="#!">Home</a>
                        </li>
                        <li>
                            <a href="#!">Categories</a>
                        </li>
                        <li>
                            <a href="#!">About</a>
                        </li>
                        <li>
                            <a href="#!">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="burger-menu" id="burger-menu">
                    <span class="burger-bar"></span>
                    <span class="burger-bar"></span>
                    <span class="burger-bar"></span>
                </div>
                <nav class="nav-menu" id="nav-menu">
                    <ul>
                        <li><a href="#!">Home</a></li>
                        <li><a href="#!">Categories</a></li>
                        <li><a href="#!">About</a></li>
                        <li><a href="#!">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php
    $conn = createDBConnection();
    getAndPrintPostsFromDB1($conn);
    closeDBConnection($conn);
    ?>
    <footer>
        <div class="fotter-wrapper">
            <div class="log-title">
                <p>Stay in Touch</p>
                <hr class="line">
            </div>
            <div class="log-input-conteiner">
                <div class="input-block">

                </div>
                <div class="submit-button">
                    <p>Submit</p>
                </div>
            </div>
            <div class="footer-blure">
                <div class="footer-conteiner">
                    <div class="title-escape">
                        <img src="http://localhost:8001/static/images/img_home/Escape.svg" alt="Escape.">
                    </div>
                    <nav class="top-list-footer foot-edit">
                        <ul class="top-list-footer">
                            <li>
                                <a href="#!">Home</a>
                            </li>
                            <li>
                                <a href="#!">Categories</a>
                            </li>
                            <li>
                                <a href="#!">About</a>
                            </li>
                            <li>
                                <a href="#!">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
        </div>
    </footer>
</body>

</html>