<!-- Слайдер -->
<div id="carouselExampleIndicators" class="carousel slide small-carousel" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/slayd1.png" class="d-block w-100" alt="Слайд 1">
        </div>
        <div class="carousel-item">
            <img src="assets/slayd2.jpeg" class="d-block w-100" alt="Слайд 2">
        </div>
        <div class="carousel-item">
            <img src="assets/slayd3.jpg" class="d-block w-100" alt="Слайд 3">
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

<!-- CSS -->
<style>
.small-carousel {
    max-width: 600px; /* можно задать меньше или больше по необходимости */
    margin: 0 auto;   /* центрирование слайдера */
}

.small-carousel img {
    height: auto;
    max-height: 400px; /* ограничение высоты, можно адаптировать */
    object-fit: cover;
}
</style>