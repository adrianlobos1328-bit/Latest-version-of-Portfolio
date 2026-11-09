<?php
$pageTitle = 'Adri';
include __DIR__ . '/includes/header.php';
?>


    <div id="main-container-background">
        <div id="main-container">
            <div id="center-content" class="reveal">
                <img src="./images/rose.png" alt="" id="hero-rose" />
                <p id="hero-name">Adri</p>
            </div>
        </div>
    </div>
    
    <div id="design">
        <div class="design-1">
            <div class="design-1-inner">
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
            </div>
        </div>
        <div class="design-1">
            <div class="design-1-inner">
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
            </div>
        </div>
        <div class="design-1">
            <div class="design-1-inner">
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
                <p class="small-letter">adri</p>
                <p class="big-letter">ADRI</p>
            </div>
        </div>
    </div>

    <div id="about-me-container">
        <div id="my-image-container" class="reveal">
            <img src="./images/profile.png" alt="" id="my-image">
        </div>
        <div class="title-font" id="about-container">
            <div id="description" class="reveal" style="transition-delay: 0.2s;">
                <p>Hello there, Adrian here. I am currently pursuing Bachelor of Science in Information Technology (BSIT). Ever since I started my college I've been studying many things that has a relationship with my chosen course, BSIT. Some of them are Java programming language, Networking and Databse. And as of right now I am still improvng my skills in web development and enjoying the process.</p>
            </div>
        </div>
    </div>

    <div id="my-works-container">
        <div class="title-font my-works-title reveal">
            <p>MY WORKS</p>
        </div>
        <div id="my-works-content-container">
            <div class="works reveal" style="transition-delay: 0.1s;">
                <div class="works-img">
                    <img src="./images/burger.png" alt="" class="works-image">
                </div>
                <div class="works-description">
                    <p class="my-works-description-title">Poster for Multimedia</p>
                    <p class="my-works-description">
                        I created this poster as part of my Multimedia Arts activity to showcase my skills in designing an effective advertisement. My goal was to capture attention and persuade viewers to crave and purchase the product by using bold visuals, warm tones, and an appealing presentation of the burger.
                    </p>
                </div>
            </div>
            
            <div class="works reveal" style="transition-delay: 0.2s;">
                <div class="works-img">
                    <img src="./images/ps_japan_edit.jpg" alt="" class="works-image">
                </div>
                <div class="works-description">
                    <p class="my-works-description-title">Visual and travel design of japan</p>
                    <p class="my-works-description">
                        I created this design to improve my skills in Multimedia Arts, especially in combining typography and imagery into a cohesive visual. By blending iconic elements of Japan with bold text, I aimed to practice creativity, composition, and how to make designs more visually engaging and meaningful.
                    </p>
                </div>
            </div>

            <div class="works reveal" style="transition-delay: 0.3s;">
                <div class="works-img">
                    <img src="./images/website_bank.png" alt="" class="works-image">
                </div>
                <div class="works-description">
                    <p class="my-works-description-title">Overview look of a bank website</p>
                    <p class="my-works-description">
                        I created this design to improve my skills in Multimedia Arts by developing an overview look for a bank company website. My goal was to practice creating a clean, professional, and visually appealing interface that effectively represents trust, security, and modern digital banking.
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php include __DIR__ . '/includes/footer.php'; ?>

    <script>
        // Scroll reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.15 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Marquee animation
        const rows = document.querySelectorAll('.design-1-inner');

        rows.forEach((row, index) => {
            row.innerHTML += row.innerHTML;

            const direction = index % 2 === 0 ? -1 : 1;
            const speed = 0.6;
            let position = direction === -1 ? 0 : -row.scrollWidth / 2;

            function animate() {
                position += speed * direction;

                if (direction === -1 && position <= -row.scrollWidth / 2) {
                    position = 0;
                } else if (direction === 1 && position >= 0) {
                    position = -row.scrollWidth / 2;
                }

                row.style.transform = `translateX(${position}px)`;
                requestAnimationFrame(animate);
            }

            animate();
        });
    </script>
</body>
</html>
