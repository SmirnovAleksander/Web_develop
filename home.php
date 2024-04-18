<?php
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
    $sql = "SELECT * FROM post WHERE featured = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            include 'featured_post.php';
        }
    } else {
        echo "0 results";
    }
}

function getAndPrintPostsFromDB2(mysqli $conn): void
{
    $sql = "SELECT * FROM post WHERE featured = 0";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            include 'most_recent_post.php';
        }
    } else {
        echo "0 results";
    }
}
// $conn = createDBConnection();
// try {
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         $posts = $result->fetch_all(MYSQLI_ASSOC);
//     }
// } catch (Exception $errror) {
//     echo $errror->getMessage();
// }
// closeDBConnection($conn)
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8001/static/styles/home.css">
    <link rel="preconnect" href="http://fonts.googleapis.com">
    <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
    <link href="http://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Lab_4</title>
</head>

<body>
    <header>
        <div class="header-wrapper">
            <div class="header-conteiner">
                <div>
                    <img src="http://localhost:8001/static/images/img_home/Escape.svg" alt="Escape.">
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
            </div>
            <div class="head-title">
                <p class="head-title__name">Let's do it together.</p>
                <p class="head-title__under">We travel the world in search of stories. Come along for the ride.</p>
                <button class="posts-button">
                    View Latest Posts
                </button>
            </div>
        </div>
    </header>
    <div class="menu-bar">
        <nav class="menu-bar__conteiner">
            <ul>
                <li>
                    <a href="#!">Nature</a>
                </li>
                <li>
                    <a href="#!">Photography</a>
                </li>
                <li>
                    <a href="#!">Relaxation</a>
                </li>
                <li>
                    <a href="#!">Vacation</a>
                </li>
                <li>
                    <a href="#!">Travel</a>
                </li>
                <li>
                    <a href="#!">Adventure</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="main-cards">
        <div class="main-cards__conteiner1">
            <div class="feature-posts__conteiner1__title">
                <p>Featured Posts</p>
                <hr class="line">
            </div>
            <nav class="feature-posts-cards">
                <?php
                $conn = createDBConnection();
                getAndPrintPostsFromDB1($conn);
                closeDBConnection($conn);
                ?>
            </nav>
        </div>
        <div class="main-cards__conteiner2">
            <div class="most-recent_conteiner2__title">
                <p>Most Recent</p>
                <hr class="line">
            </div>
            <nav class="most-recent_cards">
                <?php
                $conn = createDBConnection();
                getAndPrintPostsFromDB2($conn);
                closeDBConnection($conn);
                ?>
            </nav>
        </div>
    </div>
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
            <div class="footer-blure"></div>
            <div class="footer-conteiner">
                <div class="title-escape">
                    <img src="http://localhost:8001/static/images/img_home/Escape.svg" alt="Escape.">
                </div>
                <nav class="top-list foot-edit">
                    <ul class="top-list">
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
    </footer>
</body>

</html>