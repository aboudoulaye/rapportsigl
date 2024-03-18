@extends('template_base')
@section('content')
<!-- Inclusion des fichiers CSS Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Votre contenu HTML -->
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/image1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/image5.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/image2.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/image3.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/image4.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/logoseguela.png') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Inclusion des scripts JavaScript Bootstrap (jQuery inclus) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Initialisation du carrousel -->
<script>
    $(document).ready(function(){
        $('.carousel').carousel();
    });
</script>
<style>
    /* Style pour réduire la hauteur des images */
    .carousel-item img {
        height: 610px; /* Changer la valeur pour ajuster la hauteur maximale */
        width: 100%;
        margin: 5%; /* Centre les images horizontalement */
    }
</style>

@endsection