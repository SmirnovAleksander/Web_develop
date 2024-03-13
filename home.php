<?php
$featured_post = [
    [
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => './images/img-home/Cards/IMAGEMen1.png',
        'author' => 'Mat Vogels',
        'date' => 'September 25, 2015',
        'title-btn' => 'Photography',
        'class-color-btn' => 'photography',
        'back-img' => './images/img-home/TheRoadAhead.png',
        'href-card' => './post.php'
    ],
    [
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_modifier' => './images/img-home/Cards/IMAGEMen2.png',
        'author' => 'William Wong',
        'date' => 'September 25, 2015',
        'title-btn' => 'Adventure',
        'class-color-btn' => 'adventure',
        'back-img' => '/images/img-home/FromTopDown.png',
        'href-card' => '#'
    ],
];
?>

<?php
$most_recent = [
    [
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_modifier' => './images/img-home/Cards/IMAGEMen2.png',
        'author' => 'William Wong',
        'date' => '9/25/2015',
        'back-img' => './images/img-home/Cards/IMAGE1.png',
    ],
    [
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'img_modifier' => './images/img-home/Cards/IMAGEMen1.png',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
        'back-img' => './images/img-home/Cards/IMAGE2.png',
    ],
    [
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_modifier' => './images/img-home/Cards/IMAGEMen1.png',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
        'back-img' => './images/img-home/Cards/IMAGE3.png',
    ],
    [
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_modifier' => './images/img-home/Cards/IMAGEMen2.png',
        'author' => 'William Wong',
        'date' => '9/25/2015',
        'back-img' => './images/img-home/Cards/IMAGE4.png',
    ],
    [
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_modifier' => './images/img-home/Cards/IMAGEMen1.png',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
        'back-img' => './images/img-home/Cards/IMAGE5.png',
    ],
    [
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_modifier' => './images/img-home/Cards/IMAGEMen1.png',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
        'back-img' => './images/img-home/Cards/IMAGE6.png',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Lab_2</title>
</head>

<body>
    <header>
        <div class="header-wrapper">
            <div class="header-conteiner">
                <div>
                    <img src="./images/img-home/Escape.svg" alt="Escape.">
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
                foreach ($featured_post as $post) {
                    include 'featured_post.php';
                }
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
                foreach ($most_recent as $post) {
                    include 'most_recent.php';
                }
                ?>
            </nav>
        </div>
    </div>
    <footer>
        <div class="fotter-wrapper">
            <div class="footer-conteiner">
                <div class="title-escape">
                    <img src="./images/img-home/Escape.svg" alt="Escape.">
                </div>
                <nav class="top-list head-edit">
                    <ul class="top-list foot-edit">
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