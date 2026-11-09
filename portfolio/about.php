<?php
$pageTitle = 'Adri';
include __DIR__ . '/includes/header.php';
?>

 
    <div id="about-me-page-container">
 
        <p class="title-font my-works-title reveal">ABOUT</p>
 
        <div id="about-me-profile" class="reveal" style="transition-delay: 0.1s;">
            <div id="about-me-picture">
                <img src="./images/profile.png" alt="">
            </div>
            <div id="about-me-name">
                <p>Adrian T. Lobos</p>
            </div>
        </div>
 
        <div id="about-me-introduction-container">
            <div id="about-me-introduction" class="reveal" style="transition-delay: 0.2s;">
                <div id="my-introduction">
                    <p id="my-introduction-title">Introduction</p>
                    <p id="my-introduction-details">
                        My name is Adrian T. Lobos, an 18-year-old second-year college student at Pamantasan ng Lungsod ng Valenzuela (PLV), currently pursuing a degree in Information Technology. As an IT student, I am passionate about learning and developing my skills in technology and problem-solving. I aspire to become a successful IT professional in the future, dedicated to growing in the field and contributing to the industry.
                    </p>
                </div>
                <div id="education">
                    <p id="education-title">Education</p>
                    <p class="education-level">Bachelor of Science in Information Technology</p>
                    <p class="school">Pamantasan ng Lungsod ng Valenzuela</p>
                    <p class="year">2025 - Present</p>
                    <p class="education-level">Secondary School</p>
                    <p class="school">Lingunan National High School</p>
                    <p class="school">Lingunan Senior High School</p>
                    <p class="education-level">GAS - General Academic Strand</p>
                    <p class="year">2018 - 2024</p>
                    <p class="education-level">Primary Education</p>
                    <p class="school">Lingunan Elementary School</p>
                    <p class="school">Paltok Elementary School</p>
                    <p class="year">2012 - 2018</p>
                </div>
            </div>
 
            <div id="stacks-container" class="reveal" style="transition-delay: 0.3s;">
                <div id="stacks-title">
                    <p>Stacks</p>
                </div>
                <div id="stacks-items-container">
 
                    <div class="stack-title"><p>Tech Stack</p></div>
                    <div class="stack">
                        <div class="stack-item">
                            <p>Java</p>
                            <img src="./images/Java_logo_PNG1.png" alt="">
                        </div>
                        <div class="stack-item">
                            <p>C#</p>
                            <img src="./images/Csharp_Logo.png" alt="">
                        </div>
                        <div class="stack-item">
                            <p>HTML</p>
                            <img src="./images/HTML5_logo_and_wordmark.png" alt="">
                        </div>
                        <div class="stack-item">
                            <p>CSS</p>
                            <img src="./images/css3-logo-png-transparent.png" alt="">
                        </div>
                    </div>
 
                    <div class="stack-title"><p>Design Stack</p></div>
                    <div class="stack">
                        <div class="stack-item">
                            <p>Photoshop</p>
                            <img src="./images/Photoshop-Logo-02.png" alt="">
                        </div>
                        <div class="stack-item">
                            <p>Canva</p>
                            <img src="./images/Canva-Logo-PNG.png" alt="">
                        </div>
                    </div>
 
                    <div class="stack-title"><p>Network Technology Stack</p></div>
                    <div class="stack">
                        <div class="stack-item">
                            <p>Cisco Packet Tracer</p>
                            <img src="./images/cisco-packet-tracer.png" alt="">
                        </div>
                    </div>
 
                    <div class="stack-title"><p>Database</p></div>
                    <div class="stack">
                        <div class="stack-item">
                            <p>SQL</p>
                            <img src="./images/Mysql_logo.png" alt="">
                        </div>
                    </div>
 
                </div>
            </div>
        </div>
 
        <!-- VIDEO SECTION -->
        <div id="video-section" class="reveal" style="transition-delay: 0.35s;">
            <p class="section-heading">FEATURED</p>
            <div class="video-wrapper">
                <iframe
                    src="https://www.youtube.com/embed/vKsKOlkSSP0"
                    title="Featured Video"
                    allowfullscreen
                    referrerpolicy="strict-origin-when-cross-origin"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                </iframe>
            </div>
        </div>
 
    </div>

<?php include __DIR__ . '/includes/footer.php'; ?>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.15 });
 
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>
