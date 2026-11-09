<?php
$pageTitle = 'Adri';
include __DIR__ . '/includes/header.php';
?>


    <div id="contacts-container">
        <div class="title-font my-works-title reveal">
            <p>CONTACTS</p>
        </div>

        <div id="logo-container">
            <div class="contact-details reveal" style="transition-delay: 0.1s;">
                <a href="https://www.facebook.com/adrian.lobos.2025" target="_blank" rel="noopener noreferrer"><img src="./images/facebook_icon.jfif" alt=""></a>
                <a href="https://www.facebook.com/adrian.lobos.2025" target="_blank" rel="noopener noreferrer">adrian.lobos.2025</a>
            </div>
            <div class="contact-details reveal" style="transition-delay: 0.2s;">
                <a href="mailto:adrianlobos1328@gmail.com" target="_blank" rel="noopener noreferrer">
                    <img src="./images/gmail_icon.jfif" alt="">
                </a>
                <a href="mailto:adrianlobos1328@gmail.com" target="_blank" rel="noopener noreferrer"><p>adrianlobos1328@gmail.com</p></a>
            </div>
            <div class="contact-details reveal" style="transition-delay: 0.1s;">
                <a href="https://www.instagram.com/ad_rii19/" target="_blank" rel="noopener noreferrer"><img src="./images/Instagram_icon.png.webp" alt=""></a>
                <a href="https://www.instagram.com/ad_rii19/" target="_blank" rel="noopener noreferrer">adrian.lobos.2025</a>
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
    });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>
