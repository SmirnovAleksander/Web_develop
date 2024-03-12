<?php
$posts = [
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
    'title-btn'=> 'Adventure',
    'class-color-btn' => 'adventure',
    'back-img' => '/images/img-home/FromTopDown.png',
    'href-card' => '#'
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
                foreach ($posts as $post) {
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
                <div class="card-conteiner">
                    <div class="card-image">
                        <img src="./images/img-home/Cards/IMAGE1.png" alt="IMAGE1">
                    </div>
                    <div class="card-line"></div>
                    <div class="card-title">
                        <p class="card-title__name">Still Standing Tall</p>
                        <p class="card-title__description">Life begins at the end of your comfort zone.</p>
                    </div>
                    <div class="card-line"></div>
                    <div class="card-footer-conteiner">
                        <img class="card-img" src="./images/img-home/Cards/IMAGEMen2.png" alt="Still Standing Tall">
                        <p class="card-name">William Wong</p>
                        <p class="card-date date1">9/25/2015</p>
                    </div>
                </div>
    
                <div class="card-conteiner">
                    <div class="card-image">
                        <img src="./images/img-home/Cards/IMAGE2.png" alt="IMAGE2">
                    </div>
                    <div class="card-line"></div>
                    <div class="card-title">
                        <p class="card-title__name">Sunny Side Up</p>
                        <p class="card-title__description">No place is ever as bad as they tell you it’s going to be.</p>
                    </div>
                    <div class="card-line"></div>
                    <div class="card-footer-conteiner">
                        <img class="card-img" src="./images/img-home/Cards/IMAGEMen1.png" alt="Sunny Side Up">
                        <p class="card-name">Mat Vogels</p>
                        <p class="card-date date2">9/25/2015</p>
                    </div>
                </div>
    
                <div class="card-conteiner">
                    <div class="card-image">
                        <img src="./images/img-home/Cards/IMAGE3.png" alt="IMAGE3">
                    </div>
                    <div class="card-line"></div>
                    <div class="card-title">
                        <p class="card-title__name">Water Falls</p>
                        <p class="card-title__description">We travel not to escape life, but for life not to escape us.</p>
                    </div>
                    <div class="card-line"></div>
                    <div class="card-footer-conteiner">
                        <img class="card-img" src="./images/img-home/Cards/IMAGEMen1.png" alt="Water Falls">
                        <p class="card-name">Mat Vogels</p>
                        <p class="card-date date2">9/25/2015</p>
                    </div>
                </div>
                
                <div class="card-conteiner">
                    <div class="card-image">
                        <img src="./images/img-home/Cards/IMAGE4.png" alt="IMAGE4">
                    </div>
                    <div class="card-line"></div>
                    <div class="card-title">
                        <p class="card-title__name">Through the Mist</p>
                        <p class="card-title__description">Travel makes you see what a tiny place you occupy in the world.</p>
                    </div>
                    <div class="card-line"></div>
                    <div class="card-footer-conteiner">
                        <img class="card-img" src="./images/img-home/Cards/IMAGEMen2.png"alt="Through the Mist">
                        <p class="card-name">William Wong</p>
                        <p class="card-date date1">9/25/2015</p>
                    </div>
                </div>
                
                <div class="card-conteiner">
                    <div class="card-image">
                        <img src="./images/img-home/Cards/IMAGE5.png" alt="IMAGE5">
                    </div>
                    <div class="card-line"></div>
                    <div class="card-title">
                        <p class="card-title__name">Awaken Early</p>
                        <p class="card-title__description">Not all those who wander are lost.</p>
                    </div>
                    <div class="card-line"></div>
                    <div class="card-footer-conteiner">
                        <img class="card-img" src="./images/img-home/Cards/IMAGEMen1.png" alt="Awaken Early">
                        <p class="card-name">Mat Vogels</p>
                        <p class="card-date date2">9/25/2015</p>
                    </div>
                </div>
    
                <div class="card-conteiner">
                    <div class="card-image">
                        <img src="./images/img-home/Cards/IMAGE6.png" alt="IMAGE6">
                    </div>
                    <div class="card-line"></div>
                    <div class="card-title">
                        <p class="card-title__name">Try it Always</p>
                        <p class="card-title__description">The world is a book, and those who do not travel read only one page.</p>
                    </div>
                    <div class="card-line"></div>
                    <div class="card-footer-conteiner">
                        <img class="card-img" src="./images/img-home/Cards/IMAGEMen1.png" alt="Try it Always">
                        <p class="card-name">Mat Vogels</p>
                        <p class="card-date date2">9/25/2015</p>
                    </div>
                </div>
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