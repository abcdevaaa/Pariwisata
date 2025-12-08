<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Papua Barat Explore</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            overflow-x: hidden;
            min-height: 100vh;
            background: white;
        }

        /* Background foto untuk hero section - TANPA efek biru */
        .hero-background {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background: url('img/Pasir Timbul (1).jpg') center/cover no-repeat;
        }

        /* Overlay untuk kontras teks */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        /* NAVBAR SEPERTI DI INDEX.PHP */
        header {
            padding: 20px 0;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            z-index: -1;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* LOGO STYLING */
        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-img {
            width: 45px;
            height: 45px;
            margin-right: 12px;
            border-radius: 8px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .logo:hover .logo-img {
            transform: scale(1.05);
        }

        .logo span {
            font-size: 1.3rem;
            letter-spacing: 0.5px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            color: #4C7DA2;
            background: rgba(255, 255, 255, 0.15);
        }

        .nav-links a.active {
            color: #ffffffff;
            background: rgba(255, 255, 255, 0.15);
        }

        .button {
            display: flex;
            list-style: none;
            gap: 15px;
        }

        .login-btn, .register-btn {
            padding: 10px 25px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            border: 2px solid transparent;
            display: inline-block;
        }

        .login-btn {
            background-color: rgba(76, 125, 162, 0.85);
            color: #fff;
        }

        .login-btn:hover {
            background-color: rgba(255, 255, 255, 0.95);
            color: #4C7DA2;
            transform: translateY(-2px);
            border-color: #4C7DA2;
        }

        .register-btn {
            background-color: rgba(255, 255, 255, 0.85);
            color: #4C7DA2;
        }

        .register-btn:hover {
            background-color: rgba(76, 125, 162, 0.95);
            color: #ffffff;
            transform: translateY(-2px);
            border-color: white;
        }

        /* Hero About Section */
        .hero-about {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 20px;
            position: relative;
            z-index: 2;
            padding-top: 80px; /* Untuk kompensasi navbar fixed */
        }

        .hero-about h1 {
            font-size: 4.5rem;
            margin-bottom: 25px;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease;
        }

        .hero-about p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.6;
            text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease 0.3s both;
        }

        /* Main Content */
        .main-content {
            background: white;
            position: relative;
            padding: 80px 0;
            border-radius: 50px 50px 0 0;
            box-shadow: 0 -20px 50px rgba(0, 0, 0, 0.1);
            margin-top: -50px;
            z-index: 2;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* About Content Section */
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 60px;
            margin-bottom: 80px;
        }

        .about-image {
            flex: 1;
            min-width: 350px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            animation: fadeInLeft 1s ease;
        }

        .about-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.03);
        }

        .about-text {
            flex: 1;
            min-width: 350px;
            animation: fadeInRight 1s ease;
        }

        .about-text h2 {
            font-size: 2.8rem;
            color: #2C3E50;
            margin-bottom: 30px;
            line-height: 1.3;
            position: relative;
            display: inline-block;
        }

        .about-text h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 120px;
            height: 4px;
            background: linear-gradient(to right, #4C7DA2, #6ba3d1);
            border-radius: 2px;
        }

        .about-text p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 25px;
            font-size: 1.1rem;
        }

        .highlight {
            color: #4C7DA2;
            font-weight: 700;
        }


        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Footer */
        footer {
            background: #2C3E50;
            color: white;
            padding: 50px 0 25px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }

        .footer-section h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 0.9rem;
        }

        .footer-section ul li a:hover {
            color: #4C7DA2;
        }

        .social-logos {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .social-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .social-circle:hover {
            background: #4C7DA2;
            transform: translateY(-3px);
        }

        .footer-divider {
            border: none;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin: 30px auto;
            max-width: 1200px;
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .footer-info p {
            color: #bbb;
            margin-bottom: 8px;
            font-size: 0.85rem;
            line-height: 1.4;
        }

        .footer-info strong {
            color: #fff;
        }

        .copyright {
            text-align: center;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #888;
            font-size: 0.8rem;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-about h1 {
                font-size: 3.5rem;
            }
            
            .logo-img {
                width: 40px;
                height: 40px;
            }
            
            .logo span {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .button {
                flex-direction: column;
                gap: 10px;
            }
            
            header {
                padding: 15px 0;
            }
            
            .logo-img {
                width: 35px;
                height: 35px;
                margin-right: 8px;
            }
            
            .logo span {
                font-size: 1.1rem;
            }
            
            .hero-about {
                min-height: 80vh;
                padding: 100px 20px 60px;
            }
            
            .hero-about h1 {
                font-size: 2.8rem;
            }
            
            .hero-about p {
                font-size: 1.2rem;
            }
            
            .main-content {
                padding: 60px 0;
                border-radius: 30px 30px 0 0;
                margin-top: -30px;
            }
            
            .about-content {
                flex-direction: column;
                gap: 40px;
            }
            
            .about-text h2 {
                font-size: 2.2rem;
            }
            
            .values-section h2 {
                font-size: 2.2rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 30px;
            }
            
            .footer-info {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 480px) {
            .hero-about h1 {
                font-size: 2.2rem;
            }
            
            .hero-about p {
                font-size: 1rem;
            }
            
            .about-text h2 {
                font-size: 1.8rem;
            }
            
            .values-grid {
                grid-template-columns: 1fr;
            }
            
            .logo span {
                font-size: 1rem;
            }
            
            .logo-img {
                width: 30px;
                height: 30px;
            }
            
            .about-image, .about-text {
                min-width: 100%;
            }
            
            .about-image img {
                height: 300px;
            }
            
            .hero-about {
                padding: 90px 20px 40px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="hero-background" id="heroBg">
        
        <div class="hero-overlay"></div>
        
        <header>
            <nav>
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt="Logo Papua Barat" class="logo-img">
                </a>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php" class="active">About</a></li>
                    <li><a href="destinasi.php">Destination</a></li>
                </ul>
                <ul class="button">
                    <li><a href="login.php" class="login-btn">Login</a></li>
                    <li><a href="register.php" class="register-btn">Register</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero-about">
            <h1>About Us</h1>
            <p>Discover the story behind Papua Barat Explore and our commitment to showcasing the beauty of West Papua</p>
        </section>
    </div>

    <main class="main-content">
        <div class="content-wrapper">
            <section class="about-content">
                <div class="about-image">
                    <img src="img/danauAnggi.jpg" alt="Danau Anggi Papua Barat" 
                         onerror="this.onerror=null; this.src='img/RajaAmpat.jpg'; this.alt='Raja Ampat Papua Barat'">
                </div>
                <div class="about-text">
                    <p>Papua Barat Explore adalah platform yang dibuat untuk membantu Anda menemukan berbagai destinasi wisata terbaik di Papua Barat. Kami menghadirkan rekomendasi tempat-tempat menarik, mulai dari keindahan laut Raja Ampat, panorama Wayag dan Painemo, hingga pesona pegunungan serta budaya lokal yang unik.</p>

                    <p>Melalui informasi yang ringkas dan mudah dipahami, kami ingin memudahkan setiap pengunjung untuk mengenal potensi wisata Papua Barat dan memilih destinasi yang sesuai dengan minat mereka. Tujuan kami adalah memperkenalkan keindahan alam Papua Barat secara lebih luas sekaligus mendorong lebih banyak orang untuk mengapresiasi kekayaan alam dan budaya daerah ini.</p>
            </section>

           
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Pages</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="destinasi.php">Destination</a></li>
                    <li><a href="#">Review</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Destination</h3>
                <ul>
                    <li><a href="#">Gunung</a></li>
                    <li><a href="#">Laut</a></li>
                    <li><a href="#">Air Terjun</a></li>
                    <li><a href="#">Sejarah</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-logos">
                    <div class="social-circle">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="social-circle">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-circle">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <div class="social-circle">
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
            <div class="footer-info">
                <div>
                    <p><strong>SMKN 1 Purbalingga</strong></p>
                    <p>Jl. Mayor Jend. Sungkono No.34, Selabaya, Kec. Kalimanah, Kabupaten Purbalingga, Jawa Tengah 53371</p>
                </div>
                <div>
                    <p><strong>Email Address:</strong></p>
                    <p>pstonpapuabarat@gmail.com</p>
                    <p><strong>Contact:</strong></p>
                    <p>813-3455-7800</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2024 Papua Barat Tourism. All rights reserved. | Privacy Policy | Terms of Service</p>
        </div>
    </footer>

    <script>
        // Script untuk memastikan background gambar berfungsi dengan baik
        document.addEventListener('DOMContentLoaded', function() {
            const heroBg = document.getElementById('heroBg');
            const bgImage = new Image();
            
            // Path ke file Pasir Timbul di folder img
            const localImagePath = 'img/Pasir Timbul (1).jpg';
            
            // Load background image
            bgImage.src = localImagePath;
            
            bgImage.onload = function() {
                console.log('Pasir Timbul background image loaded successfully');
                heroBg.style.backgroundImage = 'url("' + localImagePath + '")';
            };
            
            bgImage.onerror = function() {
                console.log('Pasir Timbul (1) not found, trying alternative');
                
                // Coba alternatif file Pasir Timbul lainnya
                const alternativePaths = [
                    'img/Pasir Timbul (2).jpg',
                    'img/Pasir Timbul.jpg',
                    'img/RajaAmpat.jpg',
                    'img/pulauWayag.jpg',
                    'img/painemo.jpg',
                    'img/danauAnggi.jpg',
                    'img/kiti kiti.jpeg'
                ];
                
                // Coba semua alternatif
                let loaded = false;
                for (let i = 0; i < alternativePaths.length; i++) {
                    const testImage = new Image();
                    testImage.src = alternativePaths[i];
                    testImage.onload = function() {
                        if (!loaded) {
                            console.log('Using alternative image: ' + alternativePaths[i]);
                            heroBg.style.backgroundImage = 'url("' + alternativePaths[i] + '")';
                            loaded = true;
                        }
                    };
                }
            };
            
            // Efek scroll pada navbar seperti di index.php
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 50) {
                    header.style.padding = '10px 0';
                    header.style.background = 'rgba(0, 0, 0, 0.3)';
                } else {
                    header.style.padding = '20px 0';
                    header.style.background = 'transparent';
                }
            });
            
            // Fallback jika logo gagal dimuat
            const logoImg = document.querySelector('.logo-img');
            logoImg.addEventListener('error', function() {
                console.log('Logo gagal dimuat');
                this.style.display = 'none';
                // Tampilkan placeholder jika logo gagal
                const logoPlaceholder = document.createElement('div');
                logoPlaceholder.className = 'logo-placeholder';
                logoPlaceholder.textContent = 'PB';
                logoPlaceholder.style.width = '45px';
                logoPlaceholder.style.height = '45px';
                logoPlaceholder.style.background = 'rgba(255, 255, 255, 0.2)';
                logoPlaceholder.style.borderRadius = '8px';
                logoPlaceholder.style.display = 'flex';
                logoPlaceholder.style.alignItems = 'center';
                logoPlaceholder.style.justifyContent = 'center';
                logoPlaceholder.style.color = 'white';
                logoPlaceholder.style.fontWeight = 'bold';
                logoPlaceholder.style.marginRight = '12px';
                
                this.parentElement.insertBefore(logoPlaceholder, this);
            });
        });
    </script>
</body>
</html>