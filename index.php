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
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-baggrund">
<?php include 'header.php';?>

<div class="text-center">
    <img src="images/v-logo.png" width="180">
</div>

<div class="container">
    <div class="card border-0">
        <div class="card-body">
            <h5 class="card-title">Velkommen til Vilma Filmfestival</h5>
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


<!-- koden til carousel -->
<div class="container-fluid">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/film1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/film1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/film1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
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

<?php include 'footer.php';?>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
