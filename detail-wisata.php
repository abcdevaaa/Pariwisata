<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi - Papua Barat Explore</title>
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

        /* Background detail hero section */
        .detail-hero-background {
            position: relative;
            width: 100%;
            min-height: 70vh;
            background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(76, 125, 162, 0.8)), 
                        url('img/pulauWayag.jpg') center/cover no-repeat fixed;
        }

        /* Overlay untuk kontras teks */
        .detail-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        /* NAVBAR KONSISTEN */
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

        /* Hero Detail Section */
        .detail-hero {
            min-height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            color: white;
            padding: 0 20px;
            position: relative;
            z-index: 2;
            padding-top: 100px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .detail-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease;
            max-width: 800px;
        }

        .detail-hero-info {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .hero-info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.15);
            padding: 10px 20px;
            border-radius: 30px;
            backdrop-filter: blur(10px);
        }

        .hero-info-item i {
            font-size: 1.2rem;
            color: #FFD700;
        }

        .hero-info-item span {
            font-size: 1.1rem;
            font-weight: 500;
        }

        .detail-rating {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .rating-stars {
            color: #FFD700;
            font-size: 1.5rem;
        }

        .rating-score {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            background: rgba(76, 125, 162, 0.8);
            padding: 5px 15px;
            border-radius: 10px;
        }

        .rating-count {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
        }

        .breadcrumb {
            max-width: 1200px;
            margin: 30px auto 0;
            padding: 0 20px;
            position: relative;
            z-index: 3;
        }

        .breadcrumb-links {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-size: 1rem;
        }

        .breadcrumb-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb-links a:hover {
            color: white;
            text-decoration: underline;
        }

        .breadcrumb-links span {
            color: #FFD700;
        }

        /* Main Content */
        .detail-main-content {
            background: white;
            position: relative;
            padding: 80px 0;
        }

        .detail-content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Detail Content Layout */
        .detail-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 50px;
            margin-bottom: 60px;
        }

        /* Left Column - Main Content */
        .detail-left {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* Image Gallery */
        .image-gallery {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .main-image {
            height: 400px;
            overflow: hidden;
            position: relative;
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .main-image:hover img {
            transform: scale(1.03);
        }

        .thumbnail-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            padding: 10px;
            background: #f8f9fa;
        }

        .thumbnail {
            height: 100px;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .thumbnail:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .thumbnail.active {
            border-color: #4C7DA2;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Detail Sections */
        .detail-section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .detail-section h2 {
            font-size: 1.8rem;
            color: #2C3E50;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #4C7DA2;
        }

        .detail-description {
            line-height: 1.8;
            color: #555;
            font-size: 1.1rem;
            text-align: justify;
        }

        /* Right Column - Sidebar */
        .detail-sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        /* Quick Info Card */
        .quick-info-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-top: 5px solid #4C7DA2;
        }

        .quick-info-card h3 {
            font-size: 1.5rem;
            color: #2C3E50;
            margin-bottom: 20px;
            text-align: center;
        }

        .info-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .info-label {
            color: #666;
            font-weight: 500;
        }

        .info-value {
            color: #2C3E50;
            font-weight: 600;
            text-align: right;
        }

        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 25px;
        }

        .primary-btn, .secondary-btn {
            padding: 15px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .primary-btn {
            background: linear-gradient(135deg, #4C7DA2, #6ba3d1);
            color: white;
        }

        .primary-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(76, 125, 162, 0.3);
        }

        .secondary-btn {
            background: transparent;
            color: #4C7DA2;
            border: 2px solid #4C7DA2;
        }

        .secondary-btn:hover {
            background: #4C7DA2;
            color: white;
            transform: translateY(-3px);
        }

        /* Related Destinations */
        .related-section {
            margin-top: 60px;
        }

        .related-section h2 {
            font-size: 2rem;
            color: #2C3E50;
            margin-bottom: 30px;
            text-align: center;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .related-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .related-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .related-image {
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .related-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .related-card:hover .related-image img {
            transform: scale(1.05);
        }

        .related-category {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(76, 125, 162, 0.9);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .related-content {
            padding: 20px;
        }

        .related-title {
            font-size: 1.2rem;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .related-location {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .related-location i {
            color: #4C7DA2;
        }

        .related-btn {
            display: inline-block;
            color: #4C7DA2;
            font-weight: 600;
            text-decoration: none;
            padding: 8px 0;
            border-bottom: 2px solid transparent;
            transition: all 0.3s;
        }

        .related-btn:hover {
            border-bottom: 2px solid #4C7DA2;
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
            .detail-layout {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .detail-hero h1 {
                font-size: 3rem;
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
            
            .detail-hero {
                padding: 120px 20px 40px;
                min-height: 60vh;
            }
            
            .detail-hero h1 {
                font-size: 2.5rem;
            }
            
            .detail-hero-info {
                gap: 15px;
            }
            
            .hero-info-item {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
            
            .thumbnail-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .highlights-grid {
                grid-template-columns: 1fr;
            }
            
            .detail-section {
                padding: 20px;
            }
            
            .related-grid {
                grid-template-columns: 1fr;
            }
            
            .main-image {
                height: 300px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .detail-hero h1 {
                font-size: 2rem;
            }
            
            .rating-stars {
                font-size: 1.2rem;
            }
            
            .rating-score {
                font-size: 1.5rem;
            }
            
            .hero-info-item {
                flex: 1 0 100%;
                justify-content: center;
            }
            
            .detail-hero-info {
                flex-direction: column;
            }
            
            .logo span {
                font-size: 1rem;
            }
            
            .logo-img {
                width: 30px;
                height: 30px;
            }
            
            .thumbnail-grid {
                grid-template-columns: 1fr;
            }
            
            .thumbnail {
                height: 80px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
</head>
<body>
    <div class="detail-hero-background" id="detailHeroBg">
        <div class="detail-hero-overlay"></div>
    
        <div class="breadcrumb">
            <div class="breadcrumb-links">
                <a href="index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <a href="destinasi.php">Destination</a>
                <i class="fas fa-chevron-right"></i>
                <span>Pulau Wayag</span>
            </div>
        </div>
        
        <header>
            <nav>
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt="Logo Papua Barat" class="logo-img">
                    <span>Papua Barat</span>
                </a>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="destinasi.php">Destination</a></li>
                </ul>
                <ul class="button">
                    <li><a href="login.php" class="login-btn">Login</a></li>
                    <li><a href="register.php" class="register-btn">Register</a></li>
                </ul>
            </nav>
        </header>

        <section class="detail-hero">
            <h1>Pulau Wayag</h1>
            
            <div class="detail-hero-info">
                <div class="hero-info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Raja Ampat, Papua Barat</span>
                </div>
                <div class="hero-info-item">
                    <i class="fas fa-tag"></i>
                    <span>Destinasi Pantai</span>
                </div>
                <div class="hero-info-item">
                    <i class="fas fa-clock"></i>
                    <span>Best Time: April - Oktober</span>
                </div>
            </div>
            
            <div class="detail-rating">
                <div class="rating-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="rating-score">5.0</div>
                <div class="rating-count">(248 reviews)</div>
            </div>
        </section>
    </div>

    <main class="detail-main-content">
        <div class="detail-content-wrapper">
            <div class="detail-layout">
                <div class="detail-left">
                    <section class="image-gallery">
                        <div class="main-image">
                            <img id="mainImage" src="img/pulauWayag.jpg" alt="Pulau Wayag Main View">
                        </div>
                        <div class="thumbnail-grid">
                            <div class="thumbnail active" onclick="changeImage('img/pulauWayag.jpg', this)">
                                <img src="img/pulauWayag.jpg" alt="Pulau Wayag View 1">
                            </div>
                            <div class="thumbnail" onclick="changeImage('img/painemo.jpg', this)">
                                <img src="img/painemo.jpg" alt="Pulau Wayag View 2">
                            </div>
                            <div class="thumbnail" onclick="changeImage('img/Pasir Timbul (1).jpg', this)">
                                <img src="img/Pasir Timbul (1).jpg" alt="Pulau Wayag View 3">
                            </div>
                            <div class="thumbnail" onclick="changeImage('img/RajaAmpat.jpg', this)">
                                <img src="img/RajaAmpat.jpg" alt="Pulau Wayag View 4">
                            </div>
                        </div>
                    </section>

                    <section class="detail-section">
                        <h2>Tentang Pulau Wayag</h2>
                        <div class="detail-description">
                            <p>Pulau Wayag merupakan salah satu destinasi ikonik di Raja Ampat, Papua Barat yang terkenal dengan pemandangan karstnya yang memukau. Gugusan pulau-pulau kecil dengan formasi batu kapur yang unik menciptakan panorama yang tak terlupakan.</p>
                            
                            <p>Air lautnya yang jernih berwarna biru toska sempurna untuk aktivitas snorkeling dan diving. Keanekaragaman hayati laut di sekitar Pulau Wayag termasuk yang terkaya di dunia, dengan terumbu karang yang masih sangat terjaga dan berbagai spesies ikan hias.</p>
                            
                            <p>Untuk mencapai puncak viewpoint, pengunjung perlu mendaki jalur yang cukup menantang namun akan terbayar dengan pemandangan 360 derajat yang spektakuler. Sunset dari puncak Pulau Wayag adalah momen yang sangat direkomendasikan.</p>
                        </div>
                    </section>
                </div>

                <div class="detail-sidebar">
                    <div class="quick-info-card">
                        <h3>Informasi</h3>
                        <ul class="info-list">
                            <li class="info-item">
                                <span class="info-label">Lokasi:</span>
                                <span class="info-value">Raja Ampat</span>
                            </li>
                            <li class="info-item">
                                <span class="info-label">Jarak dari Kota:</span>
                                <span class="info-value">~4 jam speedboat</span>
                            </li>
                            <li class="info-item">
                                <span class="info-label">Biaya Masuk:</span>
                                <span class="info-value">Rp 500.000</span>
                            </li>
                            <li class="info-item">
                                <span class="info-label">Waktu Terbaik:</span>
                                <span class="info-value">April - Oktober</span>
                            </li>
                            <li class="info-item">
                                <span class="info-label">Aktivitas:</span>
                                <span class="info-value">Snorkeling, Hiking, Foto</span>
                            </li>
                            <li class="info-item">
                                <span class="info-label">Fasilitas:</span>
                                <span class="info-value">Terbatas</span>
                            </li>
                        </ul>
                        
                        <div class="action-buttons">
                            <button class="secondary-btn" id="saveDestinationBtn">
                                <i class="fas fa-bookmark"></i> Simpan ke Favorit
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Related Destinations -->
            <section class="related-section">
                <h2>Destinasi Terkait</h2>
                <div class="related-grid">
                    <!-- Related 1 -->
                    <div class="related-card">
                        <div class="related-image">
                            <img src="img/painemo.jpg" alt="Kepulauan Painemo">
                            <div class="related-category">Pantai</div>
                        </div>
                        <div class="related-content">
                            <h3 class="related-title">Kepulauan Painemo</h3>
                            <div class="related-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Raja Ampat, Papua Barat</span>
                            </div>
                            <a href="#" class="related-btn">Lihat Detail →</a>
                        </div>
                    </div>

                    <!-- Related 2 -->
                    <div class="related-card">
                        <div class="related-image">
                            <img src="img/kiti kiti.jpeg" alt="Air Terjun Kiti Kiti">
                            <div class="related-category">Air Terjun</div>
                        </div>
                        <div class="related-content">
                            <h3 class="related-title">Air Terjun Kiti Kiti</h3>
                            <div class="related-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Fakfak, Papua Barat</span>
                            </div>
                            <a href="#" class="related-btn">Lihat Detail →</a>
                        </div>
                    </div>

                    <!-- Related 3 -->
                    <div class="related-card">
                        <div class="related-image">
                            <img src="img/danauAnggi.jpg" alt="Danau Anggi">
                            <div class="related-category">Danau</div>
                        </div>
                        <div class="related-content">
                            <h3 class="related-title">Danau Anggi</h3>
                            <div class="related-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Pegunungan Arfak, Papua Barat</span>
                            </div>
                            <a href="#" class="related-btn">Lihat Detail →</a>
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
        function changeImage(src, element) {
            document.getElementById('mainImage').src = src;
            
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            
            element.classList.add('active');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const detailHeroBg = document.getElementById('detailHeroBg');
            const bgImage = new Image();
            
            const localImagePath = 'img/pulauWayag.jpg';
            const alternativePaths = [
                'img/painemo.jpg',
                'img/RajaAmpat.jpg',
                'img/danauAnggi.jpg',
                'img/kiti kiti.jpeg',
                'img/Pasir Timbul (1).jpg'
            ];
            
            bgImage.src = localImagePath;
            
            bgImage.onload = function() {
                detailHeroBg.style.backgroundImage = 'linear-gradient(rgba(44, 62, 80, 0.7), rgba(76, 125, 162, 0.8)), url("' + localImagePath + '")';
            };
            
            bgImage.onerror = function() {
                for (let i = 0; i < alternativePaths.length; i++) {
                    const testImage = new Image();
                    testImage.src = alternativePaths[i];
                    testImage.onload = function() {
                        detailHeroBg.style.backgroundImage = 'linear-gradient(rgba(44, 62, 80, 0.7), rgba(76, 125, 162, 0.8)), url("' + alternativePaths[i] + '")';
                        break;
                    };
                }
            };
            
        
            document.getElementById('bookTourBtn').addEventListener('click', function() {
                alert('Fitur pemesanan tur akan dibuka di versi lengkap aplikasi. Terima kasih!');
            });
            
            document.getElementById('saveDestinationBtn').addEventListener('click', function() {
                const btn = this;
                const originalHTML = btn.innerHTML;
                
                btn.innerHTML = '<i class="fas fa-check"></i> Disimpan ke Favorit';
                btn.style.background = '#28a745';
                btn.style.borderColor = '#28a745';
                
                setTimeout(() => {
                    btn.innerHTML = originalHTML;
                    btn.style.background = '';
                    btn.style.borderColor = '';
                }, 2000);
            });
            
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
            
          
            const logoImg = document.querySelector('.logo-img');
            logoImg.addEventListener('error', function() {
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
            
            document.querySelectorAll('.related-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Ini akan membuka halaman detail destinasi terkait di aplikasi nyata.');
                });
            });
        });
    </script>
</body>
</html>