<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi - Papua Barat Explore</title>
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

        /* Background hero section */
        .dest-hero-background {
            position: relative;
            width: 100%;
            min-height: 60vh;
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(76, 125, 162, 0.8)), 
                        url('img/RajaAmpat.jpg') center/cover no-repeat;
        }

        /* Overlay untuk kontras teks */
        .dest-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        /* NAVBAR SEPERTI DI ABOUT.PHP */
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

        /* Hero Destination Section */
        .dest-hero {
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 20px;
            position: relative;
            z-index: 2;
            padding-top: 100px;
        }

        .dest-hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease;
        }

        .dest-hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.6;
            text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease 0.3s both;
        }

        /* Search Bar */
        .search-container {
            max-width: 800px;
            width: 100%;
            margin: 30px auto 0;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .search-box {
            display: flex;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50px;
            padding: 5px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .search-input {
            flex: 1;
            border: none;
            padding: 20px 25px;
            font-size: 1.1rem;
            border-radius: 50px;
            outline: none;
            color: #333;
        }

        .search-btn {
            background: linear-gradient(135deg, #4C7DA2, #6ba3d1);
            color: white;
            border: none;
            padding: 0 40px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(76, 125, 162, 0.4);
        }

        /* Main Content */
        .dest-main-content {
            background: white;
            position: relative;
            padding: 80px 0;
        }

        .dest-content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Categories Filter */
        .categories-filter {
            margin-bottom: 50px;
        }

        .filter-title {
            font-size: 1.5rem;
            color: #2C3E50;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-btn {
            padding: 12px 25px;
            background: #f0f4f8;
            border: 2px solid #e0e6ed;
            border-radius: 30px;
            color: #2C3E50;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover {
            background: #e0e6ed;
            transform: translateY(-2px);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #4C7DA2, #6ba3d1);
            color: white;
            border-color: #4C7DA2;
        }

        /* Destination Grid */
        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .destination-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .destination-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .dest-image {
            height: 250px;
            position: relative;
            overflow: hidden;
        }

        .dest-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .destination-card:hover .dest-image img {
            transform: scale(1.05);
        }

        .dest-category {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(76, 125, 162, 0.9);
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            z-index: 2;
        }

        .dest-content {
            padding: 25px;
        }

        .dest-title {
            font-size: 1.4rem;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .dest-location {
            color: #666;
            font-size: 1rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dest-location i {
            color: #4C7DA2;
        }

        .dest-description {
            color: #777;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 0.95rem;
            text-align: justify;
        }

        .dest-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .dest-rating {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stars {
            color: #FFD700;
            font-size: 1.1rem;
        }

        .rating-score {
            color: #2C3E50;
            font-weight: 600;
        }

        .view-btn {
            background: transparent;
            border: 2px solid #4C7DA2;
            color: #4C7DA2;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .view-btn:hover {
            background: #4C7DA2;
            color: white;
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
            .dest-hero h1 {
                font-size: 3.5rem;
            }
            
            .destinations-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 30px;
            }
            
            .featured-card {
                flex-direction: column;
            }
            
            .featured-image {
                min-height: 300px;
                width: 100%;
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
            
            .dest-hero {
                min-height: 50vh;
                padding: 120px 20px 60px;
            }
            
            .dest-hero h1 {
                font-size: 2.8rem;
            }
            
            .dest-hero p {
                font-size: 1.2rem;
            }
            
            .search-box {
                flex-direction: column;
                border-radius: 15px;
                padding: 15px;
                gap: 15px;
            }
            
            .search-input,
            .search-btn {
                border-radius: 10px;
                width: 100%;
            }
            
            .destinations-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .filter-buttons {
                justify-content: center;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .featured-content {
                padding: 30px;
            }
            
            .featured-title {
                font-size: 1.8rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .dest-hero h1 {
                font-size: 2.2rem;
            }
            
            .dest-hero p {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .featured-content {
                padding: 20px;
            }
            
            .featured-title {
                font-size: 1.5rem;
            }
            
            .featured-stats {
                flex-direction: column;
                gap: 15px;
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
    <div class="dest-hero-background" id="destHeroBg">
        <div class="dest-hero-overlay"></div>
        
        <header>
            <nav>
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt="Logo Papua Barat" class="logo-img">
                </a>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="destinasi.php" class="active">Destination</a></li>
                </ul>
                <ul class="button">
                    <li><a href="login.php" class="login-btn">Login</a></li>
                    <li><a href="register.php" class="register-btn">Register</a></li>
                </ul>
            </nav>
        </header>

        <section class="dest-hero">
            <h1>Discover Papua Barat</h1>
            <p>Explore breathtaking destinations in West Papua</p>
            
            <div class="search-container">
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Search destinations...">
                    <button class="search-btn">Cari</button>
                </div>
            </div>
        </section>
    </div>

    <main class="dest-main-content">
        <div class="dest-content-wrapper">
            <!-- Categories Filter -->
            <section class="categories-filter">
                <h3 class="filter-title">Filter Berdasarkan Kategori</h3>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-category="all">Semua</button>
                    <button class="filter-btn" data-category="gunung">Gunung</button>
                    <button class="filter-btn" data-category="pantai">Pantai</button>
                    <button class="filter-btn" data-category="air-terjun">Air Terjun</button>
                    <button class="filter-btn" data-category="danau">Danau</button>
                    <button class="filter-btn" data-category="sejarah">Sejarah</button>
                </div>
            </section>

            <!-- Destinations Grid -->
            <section class="destinations-grid" id="destinationsGrid">
                <!-- Destination 1 -->
                <div class="destination-card" data-category="pantai">
                    <div class="dest-image">
                        <img src="img/pulauWayag.jpg" alt="Pulau Wayag">
                        <div class="dest-category">Pantai</div>
                    </div>
                    <div class="dest-content">
                        <h3 class="dest-title">Pulau Wayag</h3>
                        <div class="dest-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Raja Ampat, Papua Barat</span>
                        </div>
                        <p class="dest-description">Gugusan pulau karst dengan pemandangan ikonik yang memukau. Airnya jernih kebiruan, sempurna untuk snorkeling dan menyelam. Spot terbaik untuk foto panorama 360 derajat.</p>
                        <div class="dest-info">
                            <div class="dest-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-score">5.0</span>
                            </div>
                            <button class="view-btn">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Destination 2 -->
                <div class="destination-card" data-category="pantai">
                    <div class="dest-image">
                        <img src="img/painemo.jpg" alt="Kepulauan Painemo">
                        <div class="dest-category">Pantai</div>
                    </div>
                    <div class="dest-content">
                        <h3 class="dest-title">Kepulauan Painemo</h3>
                        <div class="dest-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Raja Ampat, Papua Barat</span>
                        </div>
                        <p class="dest-description">Gugusan pulau kecil dengan pasir putih dan air laut yang sangat jernih. Keanekaragaman hayati lautnya luar biasa, ideal untuk snorkeling melihat ikan hias dan terumbu karang.</p>
                        <div class="dest-info">
                            <div class="dest-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-score">5.0</span>
                            </div>
                            <button class="view-btn">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Destination 3 -->
                <div class="destination-card" data-category="air-terjun">
                    <div class="dest-image">
                        <img src="img/kiti kiti.jpeg" alt="Air Terjun Kiti Kiti">
                        <div class="dest-category">Air Terjun</div>
                    </div>
                    <div class="dest-content">
                        <h3 class="dest-title">Air Terjun Kiti Kiti</h3>
                        <div class="dest-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Fakfak, Papua Barat</span>
                        </div>
                        <p class="dest-description">Air terjun setinggi 100 meter yang tersembunyi di dalam hutan tropis. Suara gemuruh airnya menenangkan, dan kolam alami di bawahnya cocok untuk berenang.</p>
                        <div class="dest-info">
                            <div class="dest-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-score">5.0</span>
                            </div>
                            <button class="view-btn">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Destination 4 -->
                <div class="destination-card" data-category="danau">
                    <div class="dest-image">
                        <img src="img/danauAnggi.jpg" alt="Danau Anggi">
                        <div class="dest-category">Danau</div>
                    </div>
                    <div class="dest-content">
                        <h3 class="dest-title">Danau Anggi</h3>
                        <div class="dest-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Pegunungan Arfak, Papua Barat</span>
                        </div>
                        <p class="dest-description">Danau kembar di ketinggian 2.000 mdpl dengan suhu sejuk. Dikelilingi perkebunan sayur dan desa tradisional suku Arfak. Cocok untuk trekking dan menikmati panorama pegunungan.</p>
                        <div class="dest-info">
                            <div class="dest-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-score">5.0</span>
                            </div>
                            <button class="view-btn">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Destination 5 -->
                <div class="destination-card" data-category="pantai">
                    <div class="dest-image">
                        <img src="img/Pasir Timbul (1).jpg" alt="Pasir Timbul">
                        <div class="dest-category">Pantai</div>
                    </div>
                    <div class="dest-content">
                        <h3 class="dest-title">Pasir Timbul</h3>
                        <div class="dest-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Raja Ampat, Papua Barat</span>
                        </div>
                        <p class="dest-description">Gosong pasir putih yang muncul saat air laut surut. Dikelilingi air laut warna biru toska, menciptakan pemandangan seperti surga. Hanya bisa dikunjungi saat air surut.</p>
                        <div class="dest-info">
                            <div class="dest-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-score">5.0</span>
                            </div>
                            <button class="view-btn">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Destination 6 -->
                <div class="destination-card" data-category="gunung">
                    <div class="dest-image">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Pegunungan Arfak">
                        <div class="dest-category">Gunung</div>
                    </div>
                    <div class="dest-content">
                        <h3 class="dest-title">Pegunungan Arfak</h3>
                        <div class="dest-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Manokwari, Papua Barat</span>
                        </div>
                        <p class="dest-description">Rangkaian pegunungan dengan keanekaragaman hayati tinggi. Habitat burung cendrawasih dan anggrek endemik. Trekking menantang dengan pemandangan lembah hijau.</p>
                        <div class="dest-info">
                            <div class="dest-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="rating-score">4.5</span>
                            </div>
                            <button class="view-btn">Lihat Detail</button>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="destinasi.php">Destination</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Destination</h3>
                <ul>
                    <li><a href="#">Gunung</a></li>
                    <li><a href="#">Pantai</a></li>
                    <li><a href="#">Air Terjun</a></li>
                    <li><a href="#">Danau</a></li>
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
                    <p><strong>Email:</strong></p>
                    <p>pstonpapuabarat@gmail.com</p>
                    <p><strong>Kontak:</strong></p>
                    <p>813-3455-7800</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2024 Papua Barat Tourism. Semua hak dilindungi. | Kebijakan Privasi | Syarat Layanan</p>
        </div>
    </footer>

    <script>
        // Filter destinations by category
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const destinationCards = document.querySelectorAll('.destination-card');
            const searchInput = document.querySelector('.search-input');
         
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    const category = this.getAttribute('data-category');
                    destinationCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category');
                        
                        if (category === 'all' || category === cardCategory) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 100);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
            
            // Search 
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                destinationCards.forEach(card => {
                    const title = card.querySelector('.dest-title').textContent.toLowerCase();
                    const description = card.querySelector('.dest-description').textContent.toLowerCase();
                    const location = card.querySelector('.dest-location span').textContent.toLowerCase();
                    
                    if (title.includes(searchTerm) || 
                        description.includes(searchTerm) || 
                        location.includes(searchTerm)) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });

            document.querySelectorAll('.view-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.destination-card');
                    const title = card.querySelector('.dest-title').textContent;
                    alert(`Anda mengklik "${title}". Ini akan membuka halaman detail di aplikasi nyata.`);
                });
            });
            
            const destHeroBg = document.getElementById('destHeroBg');
            const bgImage = new Image();
            
            const localImagePath = 'img/RajaAmpat.jpg';
            const alternativePaths = [
                'img/pulauWayag.jpg',
                'img/painemo.jpg',
                'img/danauAnggi.jpg',
                'img/kiti kiti.jpeg',
                'img/Pasir Timbul (1).jpg'
            ];
            
            bgImage.src = localImagePath;
            
            bgImage.onload = function() {
                destHeroBg.style.backgroundImage = 'linear-gradient(rgba(44, 62, 80, 0.8), rgba(76, 125, 162, 0.8)), url("' + localImagePath + '")';
            };
            
            bgImage.onerror = function() {
                for (let i = 0; i < alternativePaths.length; i++) {
                    const testImage = new Image();
                    testImage.src = alternativePaths[i];
                    testImage.onload = function() {
                        destHeroBg.style.backgroundImage = 'linear-gradient(rgba(44, 62, 80, 0.8), rgba(76, 125, 162, 0.8)), url("' + alternativePaths[i] + '")';
                        break;
                    };
                }
            };
            
            // Navbar scroll effect
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
            
            // Logo fallback
            const logoImg = document.querySelector('.logo-img');
            logoImg.addEventListener('error', function() {
                console.log('Logo gagal dimuat');
                this.style.display = 'none';
                
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