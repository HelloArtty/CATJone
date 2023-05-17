<?php 
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>CATJone</title>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css\\home.css" />
    <link rel="stylesheet" href="css\\load.css" />
    <link rel="stylesheet" href="css\\about.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=IBM+Plex+Sans+Thai&family=Indie+Flower&family=Itim&family=Mogra&family=Montserrat+Alternates&display=swap"
        rel="stylesheet">

    <!-- custom js file link  -->
    <script src="javascript\\loading.js" defer></script>


</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cat">
            <div class="cat__body"></div>
            <div class="cat__tail"></div>
            <div class="cat__head"></div>
        </div>
    </div>

    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="index.php" class="logo">CATJone</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="meow.php">Meow</a>
            <a href="guide.php">Guide</a>
            <a href="about.php">About</a>
        </nav>
    </header>

    <div class="about-wrapper">
        <div class="about-left">
            <div class="about-left-content">
                <div>
                    <div class="shadow">
                        <div class="about-img">
                            <img src="img\\1.jpg" alt="about image">
                        </div>
                    </div>

                    <h2>Chaithawat Saklang</h2>
                    <h3>applied computer science students</h3>
                </div>

                <ul class="icons">
                    <a href="https://www.facebook.com/Chaithawat.Saklang/"><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href="https://www.instagram.com/ctwsk.__a/"><li><i class="fab fa-instagram"></i></li></a>
                    <a href="https://github.com/HelloArtty"></href><li><i class="fab fa-github"></i></li></a>
                </ul>

            </div>
        </div>

        <div class="about-right">
            <h1>hi<span>!</span></h1>
            <h2>I\'m Hello Artty.❤️
                <br> 
                <img src="https://media3.giphy.com/media/UQ1EI1ML2ABQdbebup/giphy.gif?cid=790b76111a687a396138a8fcccb967b842741054f92aa369&rid=giphy.gif&ct=s" width="250" />
                </br>
            </h2>
            <div class="about-para">
                <p>
                    My name is Chaithawat Saklang. <br> I\'m a student of applied computer science.
                </p>
            </div>
        </div>
    </div>

</body>

</html>';