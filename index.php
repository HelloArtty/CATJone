<?php 
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CATJone</title>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css\\home.css">
    <link rel="stylesheet" href="css\\load.css">
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

    <section class="home" id="home">
        <div class="content">
            <h3 class="text_shadows">Meow</h3><span>The cat is so cute.</span>
            <p>If you like cats, you\'re a good person, God didn\'t say. But if you don\'t like cats You are a bad person.
            </p>
            <a href="meow.php" class="btn">Go To Meow</a>
        </div>
    </section>
</body>

</html>';