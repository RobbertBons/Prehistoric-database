<?php require_once 'partials/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/main.css">
<body>

<section class="banner">
        <div class="banner-container">
            <div class="banner-slide">
                <img class="banner-image" src="img/prehistory.png" alt="Banner Image 1">
            </div>
            <div class="banner-slide">
                <img class="banner-image" src="img/788900.jpg" alt="Banner Image 2">
            </div>
            <div class="banner-slide">
                <img class="banner-image" src="img/hallucigenia_reconstruction_2017_10_11.jpg" alt="Banner Image 3">
            </div>
        </div>
    </section>

<section>
    <article class='title'>
        <h2>Welcome to Paleo Chronicle</h2>
        <p>Explore the fascinating world of prehistoric creatures and ancient history!</p>
    </article>
</section>

<section>
    <article class='species'>
        <h1>Featured Species</h1>
        <p>Discover the amazing diversity of prehistoric species!</p>
    </article>
</section>

</body>
<script>
    // JavaScript for carousel functionality
    const slides = document.querySelectorAll('.banner-slide');
    let currentSlide = 0;

    function showSlide(n) {
        slides[currentSlide].style.display = 'none';
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].style.display = 'block';
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    setInterval(nextSlide, 3000); // Change slides every 3 seconds
</script>

<?php require_once 'partials/footer.php'; ?>