<?php
    require_once 'partials/header.php'
?>

<link rel="stylesheet" type="text/css" href="css/main.css">
<body>
    <section class="banner">
        <div class="banner-container">
            <div class="banner-slide">
                <img class="banner-image" src="img/OIG2.jpg" alt="Banner Image 1">
            </div>
            <div class="banner-slide">
                <img class="banner-image" src="img/OIG4.jpg" alt="Banner Image 2">
            </div>
            <div class="banner-slide">
                <img class="banner-image" src="img/OIG5.jpg" alt="Banner Image 3">
            </div>
        </div>
        <button class="carousel-btn prev-btn" onclick="prevSlide()">Prev</button>
        <button class="carousel-btn next-btn" onclick="nextSlide()">Next</button>
    </section>

    <section>
        <article>
            <h1>Welcome by Paleo Chronical</h1>
        </article>
    </section>
    <section>
        <article class='species'>
            <p>species</p>
        </article>
    </section>
</body>


<?php
    require_once 'partials/footer.php';
?>

<script>
    let slideIndex = 0;

    function showSlides() {
        const slides = document.querySelectorAll('.banner-slide');
        if (slideIndex >= slides.length) {
            slideIndex = 0;
        } else if (slideIndex < 0) {
            slideIndex = slides.length - 1;
        }
        slides.forEach(slide => {
            slide.style.transform = `translateX(-${slideIndex * 100}%)`;
        });
    }

    function prevSlide() {
        slideIndex--;
        showSlides();
    }

    function nextSlide() {
        slideIndex++;
        showSlides();
    }

    // Auto slide
    setInterval(nextSlide, 3000); // Change slide every 3 seconds
</script>