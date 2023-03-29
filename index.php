<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Vilma Filmfestival - Forår 2024</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">


	<link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/645a3a1c42.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=Quicksand&family=Raleway:wght@200&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-baggrund">
<?php include 'header.php';?>

<div class="text-center">
    <img src="images/v-logo.png" width="180">
</div>

<div class="container d-flex justify-content-center">
    <div class="col-10 card border-0">
        <div class="card-body">
            <h5 class="card-title h2 text-center">Velkommen til Vilma Filmfestival</h5>
            <p class="card-text">Din go-to-app til dette års store film
                oplevelse. Der bliver vist danske film,
                interviews med skuespillere og spændende
                oplæg. Vi er stolte af at præsentere et
                bredt udvalg af danske film og tilbyde et
                eksklusivt indblik i dansk filmkunst.</p>
        </div>
    </div>
</div>
<br>
    <div class="text-center">
    <img src="images/swirl-right.png" height="120">
</div>
<br>


<!-- koden til Film carousel -->
<div class="text-center">
    <h2>Årets Film</h2>
</div>
<div class="container col-10">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <a href="film_1.php" class="carousel-item active">
            <img src="images/film1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Vil du se min smukke navle?</h5>
                <p>Vises d. 2 April 2024</p>
            </div>
        </a>
        <a href="film_2.php" class="carousel-item">
            <img src="images/film2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Adams Æbler</h5>
                <p>Vises d. 3 April 2024</p>
            </div>
        </a>
        <div class="carousel-item">
            <img src="images/film3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Kundskabens træ</h5>
                <p>Vises d. 5 April 2024</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<br>
<br>
<!-- koden til Gæster carousel -->
<div class="text-center">
    <h2 class="">Årets Gæster</h2>
</div>
<div class="container col-10">
    <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <a href="guest_1.php" class="carousel-item active">
                <img src="images/person1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Sofie lassen kahlke</h5>
                    <p>Taler d. 2 April 2024</p>
                </div>
            </a>
            <a href="guest_2.php" class="carousel-item">
                <img src="images/person2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Søren Kragh-Jacobsen</h5>
                    <p>Vises d. 3 April 2024</p>
                </div>
            </a>
            <div class="carousel-item">
                <img src="images/person3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <h5>Bille August</h5>
                    <p>Vises d. 5 April 2024</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<br>
<div class="text-center">
    <img src="images/swirl-left.png" height="120">
</div>
<br>
<div class="text-center">
    <h2 class="">Events</h2>
</div>

<div class="container d-flex justify-content-center">
    <div class="card border-0 col-10">
        <div class="card-body ">
            <h5 class="card-title">Outdoor Film Show
                på Schweizerpladsen i Slagelse</h5>
            <p class="card-text">
                Vil du opleve et film show ud over det
                sædvanlige, så holder vi i foråret 2024 vores
                Outdoor Film Show i Slagelse by...</p>
            <a class="btn btn-knap text-white fw-bold" href="#" role="button">Læs mere</a>
        </div>
    </div>
</div>
<br>
<div class="text-center">
    <img src="images/swirl-right.png" height="120">
</div>
<br>
<div class="container d-flex justify-content-center">
    <div class="card border-0 col-10">
        <div class="card-body ">
            <h5 class="card-title">Vil du udforske en omfattende samling af ungdomsfilm fra 1950 til 2020?</h5>
            <p class="card-text">
                Vores håndplukkede og store udvalg inkluderer alt fra tidlige klassikere som "Vil du se min smukke navle?" og "Kundskabens træ" til nyere film som “Blinkende lygter" og "Adams æbler".
                Uanset om du er interesseret i teenagedramaer, coming-of-age-film eller ungdomskomedier, så er der noget for enhver smag.</p>
            <a class="btn btn-knap text-white fw-bold" href="#" role="button">Udforsk flere spændende ungdomsfilm fra 1950-2020</a>
        </div>
    </div>
</div>



<?php include 'footer.php';?>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
