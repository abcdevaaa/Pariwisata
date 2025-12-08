<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papua Barat - Explore</title>
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
        }

        /* Video Background */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            overflow: hidden;
        }

        .video-background iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 56.25vw;
            min-height: 100vh;
            min-width: 177.77vh;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        /* Overlay dengan blur minimal */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        /* Navbar dengan blur */
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
            width: 45px; /* Ukuran logo */
            height: 45px;
            margin-right: 12px;
            border-radius: 8px;
            object-fit: contain; /* Biar gambar tidak terdistorsi */
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

        /* Hero Section */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero {
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding-top: 80px;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
            animation: fadeInUp 1s ease;
        }

        .hero h3 {
            font-size: 1.5rem;
            margin-bottom: 30px;
            font-weight: 300;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
            animation: fadeInUp 1s ease 0.3s both;
        }

        .explore-btn {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 15px 50px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 30px;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .explore-btn:hover {
            background-color: white;
            color: #4C7DA2;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        /* Main Content - Categories and Top Spots */
        .main-content {
            background: white;
            min-height: 100vh;
            position: relative;
            z-index: 1;
            padding: 80px 0;
            margin-top: -50px;
            border-radius: 50px 50px 0 0;
            box-shadow: 0 -20px 50px rgba(0, 0, 0, 0.1);
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Categories Section */
        .categories-section {
            margin-bottom: 60px;
        }

        .section-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        .categories-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
            margin: 0 auto;
            max-width: 800px;
        }

        .category-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4C7DA2, #6ba3d1);
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(76, 125, 162, 0.2);
        }

        .category-circle:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(76, 125, 162, 0.3);
        }

        .category-circle i {
            font-size: 24px;
            margin-bottom: 6px;
        }

        .category-circle span {
            font-size: 11px;
            font-weight: 500;
            text-align: center;
            line-height: 1.2;
        }

        /* Top Travel Spots Section */
        .top-spots-section {
            margin-bottom: 80px;
        }

        .spots-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .spot-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
        }

        .spot-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .spot-image {
            height: 180px;
            position: relative;
            overflow: hidden;
        }

        .spot-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .spot-card:hover .spot-image img {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.3));
            padding: 10px;
            color: white;
            font-size: 14px;
            font-weight: 500;
        }

        .spot-content {
            padding: 20px;
        }

        .spot-title {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 5px;
            font-weight: 600;
            line-height: 1.3;
        }

        .spot-location {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .location-detail {
            color: #888;
            font-size: 0.85rem;
            margin-top: 2px;
        }

        .rating {
            color: #FFD700;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .rating-score {
            color: #333;
            font-weight: 600;
            font-size: 0.95rem;
            margin-left: 5px;
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
            color: #ffffffff;
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

        /* Responsive */
        @media (max-width: 1024px) {
            .spots-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
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
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero h3 {
                font-size: 1.2rem;
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
            
            .main-content {
                padding: 60px 0;
                margin-top: -30px;
                border-radius: 30px 30px 0 0;
            }
            
            .section-title {
                font-size: 1.7rem;
                margin-bottom: 25px;
            }
            
            .categories-grid {
                gap: 20px;
            }
            
            .spots-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero h3 {
                font-size: 1rem;
            }
            
            .explore-btn {
                padding: 12px 30px;
                font-size: 1rem;
            }
            
            .logo span {
                font-size: 1rem;
            }
            
            .logo-img {
                width: 30px;
                height: 30px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- YouTube Video Background -->
    <div class="video-background">
        <iframe 
            src="https://www.youtube.com/embed/fzKYvNQKyYI?autoplay=1&mute=1&loop=1&controls=0&playlist=fzKYvNQKyYI&showinfo=0&rel=0&modestbranding=1"
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>
  
    <div class="overlay"></div>

    <header>
        <nav>
            <a href="#" class="logo">
                <img src="img/logo.png" alt="Logo Papua Barat" class="logo-img">
                
            </a>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="destinasi.php">Destination</a></li>
            </ul>
            <ul class="button">
                <li><a href="#" class="login-btn">Login</a></li>
                <li><a href="#" class="register-btn">Register</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <section class="hero">
            <h1>PAPUA BARAT</h1>
            <h3>Discover the Untouched Beauty of Papua Barat</h3>
            <button class="explore-btn">Explore Now</button>
        </section>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="content-wrapper">
            
            <!-- Categories Section -->
            <section class="categories-section">
                <h2 class="section-title">Explore Categories</h2>
                <div class="categories-grid">
                    <div class="category-circle">
                        <i class="fas fa-mountain"></i>
                        <span>Gunung</span>
                    </div>
                    <div class="category-circle">
                        <i class="fas fa-water"></i>
                        <span>Laut</span>
                    </div>
                    <div class="category-circle">
                        <i class="fas fa-waterfall"></i>
                        <span>Air Terjun</span>
                    </div>
                    <div class="category-circle">
                        <i class="fas fa-landmark"></i>
                        <span>Sejarah</span>
                    </div>
                    <div class="category-circle">
                        <i class="fas fa-utensils"></i>
                        <span>Kuliner</span>
                    </div>
                    <div class="category-circle">
                        <i class="fas fa-hotel"></i>
                        <span>Penginapan</span>
                    </div>
                </div>
            </section>

            <!-- Top Travel Spots Section -->
            <section class="top-spots-section">
                <h2 class="section-title">Top Travel Spots</h2>
                <div class="spots-grid">
                    <!-- Spot 1 -->
                    <div class="spot-card">
                        <div class="spot-image">
                            <img src="img/pulauWayag.jpg" alt="Pulau Wayag">
                            <div class="image-overlay">Pulau Wayag</div>
                        </div>
                        <div class="spot-content">
                            <h3 class="spot-title">Pulau Wayag</h3>
                            <div class="spot-location">
                                <div>Raja Ampat</div>
                                <!-- <div class="location-detail">Keindahan alam Raja Ampat</div> -->
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-score">5.0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Spot 2 -->
                    <div class="spot-card">
                        <div class="spot-image">
                            <img src="img/painemo.jpg" alt="Raja Ampat">
                            <div class="image-overlay">Kepulauan Painemo</div>
                        </div>
                        <div class="spot-content">
                            <h3 class="spot-title">Kepulauan Painemo</h3>
                            <div class="spot-location">
                                <div>Raja Ampat</div>
                                <!-- <div class="location-detail">Surga Bawah Laut</div> -->
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-score">5.0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Spot 3 -->
                    <div class="spot-card">
                        <div class="spot-image">
                            <img src="img/kiti kiti.jpeg" alt="Air Terjun">
                            <div class="image-overlay">Air Terjun Kiti Kiti</div>
                        </div>
                        <div class="spot-content">
                            <h3 class="spot-title">Air Terjun Kiti Kiti</h3>
                            <div class="spot-location">
                                <div>Fakfak</div>
                                <!-- <div class="location-detail">Fakfak</div> -->
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-score">5.0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Spot 4 -->
                    <div class="spot-card">
                        <div class="spot-image">
                            <img src="img/danauAnggi.jpg" alt="Danau">
                            <div class="image-overlay">Danau Anggi</div>
                        </div>
                        <div class="spot-content">
                            <h3 class="spot-title">Danau Anggi</h3>
                            <div class="spot-location">
                                <div>Pegunungan Arfak</div>
                                <!-- <div class="location-detail">Danau Alami</div> -->
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="rating-score">5.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Pages</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Destination</a></li>
                    <li><a href="#">Review</a></li>
                    <li><a href="#">About Us</a></li>
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
        // Smooth scroll untuk tombol explore
        document.querySelector('.explore-btn').addEventListener('click', function() {
            document.querySelector('.main-content').scrollIntoView({ 
                behavior: 'smooth' 
            });
        });

        // Efek scroll pada navbar
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

        // Animasi untuk kategori bulat
        document.querySelectorAll('.category-circle').forEach(circle => {
            circle.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.05)';
            });
            
            circle.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
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
    </script>
</body>
</html>