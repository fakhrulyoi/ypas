<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YP Advanced Skills - Building Tomorrow's Professionals</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #1e40af;
            --primary-dark: #1e3a8a;
            --secondary: #f59e0b;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f9fafb;
            --white: #ffffff;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Navigation */
        .top-bar {
            background: var(--primary-dark);
            color: white;
            padding: 8px 0;
            font-size: 14px;
        }

        .top-bar .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .top-bar a:hover {
            color: var(--secondary);
        }

        .navbar {
            background: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 80px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 24px;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            list-style: none;
            align-items: center;
        }

        .nav-menu a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--secondary);
            transition: width 0.3s;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .mobile-toggle span {
            width: 25px;
            height: 3px;
            background: var(--primary);
            transition: all 0.3s;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #3b82f6 100%);
            padding: 100px 20px 120px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,144C960,149,1056,139,1152,128C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            opacity: 0.5;
        }

        .hero-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 56px;
            color: white;
            margin-bottom: 20px;
            font-weight: 800;
            line-height: 1.2;
        }

        .hero-content .highlight {
            color: var(--secondary);
        }

        .hero-content p {
            font-size: 20px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 35px;
            line-height: 1.7;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: var(--secondary);
            color: var(--primary-dark);
        }

        .btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.3);
        }

        .btn-secondary {
            background: white;
            color: var(--primary);
        }

        .btn-secondary:hover {
            background: var(--bg-light);
            transform: translateY(-2px);
        }

        .hero-image {
            position: relative;
        }

        .hero-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.3);
        }

        /* Stats Section */
        .stats {
            background: white;
            margin-top: -60px;
            position: relative;
            z-index: 10;
        }

        .stats-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .stat-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .stat-card .icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 32px;
            color: white;
        }

        .stat-card h3 {
            font-size: 42px;
            color: var(--primary);
            margin-bottom: 10px;
            font-weight: 800;
        }

        .stat-card p {
            color: var(--text-light);
            font-size: 16px;
        }

        /* Programs Section */
        .programs {
            padding: 100px 20px;
            background: var(--bg-light);
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 42px;
            color: var(--text-dark);
            margin-bottom: 15px;
            font-weight: 800;
        }

        .section-header p {
            font-size: 18px;
            color: var(--text-light);
        }

        .programs-grid {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .program-content ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .program-content ul li {
            margin-bottom: 8px;
        }

        .program-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s;
            cursor: pointer;
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .program-image {
            height: 220px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 64px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .program-image::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .program-content {
            padding: 30px;
        }

        .program-content h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .program-content p {
            color: var(--text-light);
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .program-content .learn-more {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: gap 0.3s;
        }

        .program-content .learn-more:hover {
            gap: 12px;
        }

        /* Features Section */
        .features {
            padding: 100px 20px;
            background: white;
        }

        .features-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .features-content h2 {
            font-size: 42px;
            margin-bottom: 25px;
            font-weight: 800;
            color: var(--text-dark);
        }

        .features-content p {
            font-size: 18px;
            color: var(--text-light);
            margin-bottom: 40px;
            line-height: 1.8;
        }

        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .feature-item {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .feature-item .icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
        }

        .feature-item h4 {
            font-size: 20px;
            margin-bottom: 8px;
            color: var(--text-dark);
        }

        .feature-item p {
            color: var(--text-light);
            font-size: 16px;
            margin: 0;
        }

        /* Footer */
        .footer {
            background: var(--text-dark);
            color: white;
            padding: 60px 20px 30px;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 40px;
        }

        .footer h3 {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .footer p {
            color: rgba(255,255,255,0.7);
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .footer ul {
            list-style: none;
        }

        .footer ul li {
            margin-bottom: 12px;
        }

        .footer ul a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer ul a:hover {
            color: var(--secondary);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.5);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-container {
                grid-template-columns: 1fr;
            }

            .hero-content h1 {
                font-size: 42px;
            }

            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .programs-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .features-container {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .mobile-toggle {
                display: flex;
            }

            .hero-content h1 {
                font-size: 32px;
            }

            .hero-content p {
                font-size: 16px;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }

            .programs-grid {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div>
                <i class="fas fa-phone"></i> +609 567 1333 |
                <i class="fas fa-map-marker-alt"></i> Kuantan, Pahang
            </div>
            <div>
                <a href="#"><i class="fas fa-envelope"></i> info@ypas.edu.my</a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span>YPAS</span>
            </a>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#programs">Programs</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#admissions">Admissions</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <h1>Building Tomorrow's <span class="highlight">Professionals</span></h1>
                <p>Empowering students with advanced skills and knowledge to excel in their chosen careers. Join YP Advanced Skills and transform your future today.</p>
                <div class="cta-buttons">
                    <a href="#programs" class="btn btn-primary">
                        Explore Programs <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="btn btn-secondary">
                        Get in Touch
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Students" style="object-fit: cover;">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-container">
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>5000+</h3>
                <p>Active Students</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>150+</h3>
                <p>Expert Instructors</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>50+</h3>
                <p>Course Programs</p>
            </div>
            <div class="stat-card">
                <div class="icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3>95%</h3>
                <p>Success Rate</p>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs" id="programs">
        <div class="section-header">
            <h2>SIJIL & DIPLOMA Kemahiran Malaysia</h2>
            <p>Program-program yang ditawarkan di YP Advanced Skills dengan pengiktirafan Jabatan Pembangunan Kemahiran (JPK).</p>
        </div>
        <div class="programs-grid">
            <div class="program-card">
                <div class="program-image" style="background: linear-gradient(135deg, #ea580c, #fb923c);">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="program-content">
                    <h3>KULINARI</h3>
                    <ul style="text-align: left; color: var(--text-light); font-size: 14px; line-height: 1.8;">
                        <li>Tahap 2 - Penyediaan Dan Penyajian Makanan</li>
                        <li>Tahap 3 - Penyediaan Dan Pembuatan Makanan</li>
                        <li>Tahap 4 - Perkhidmatan Dan Penyediaan Makanan</li>
                    </ul>
                    <a href="#" class="learn-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-card">
                <div class="program-image" style="background: linear-gradient(135deg, #f59e0b, #fbbf24);">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="program-content">
                    <h3>ELEKTRIK</h3>
                    <ul style="text-align: left; color: var(--text-light); font-size: 14px; line-height: 1.8;">
                        <li>Tahap 2 - Instalasi Elektrik Asas</li>
                        <li>Tahap 3 - Pemasangan Dan Penyelenggaraan Elektrik 1 Fasa</li>
                        <li>Tahap 3 - Pemasangan Dan Penyelenggaraan Elektrik 3 Fasa</li>
                    </ul>
                    <a href="#" class="learn-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-card">
                <div class="program-image" style="background: linear-gradient(135deg, #059669, #10b981);">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="program-content">
                    <h3>PENGURUSAN PEJABAT</h3>
                    <ul style="text-align: left; color: var(--text-light); font-size: 14px; line-height: 1.8;">
                        <li>Tahap 3 - Pengurusan Perkeranian</li>
                        <li>Tahap 4 - Pengurusan Pentadbiran</li>
                    </ul>
                    <a href="#" class="learn-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-card">
                <div class="program-image" style="background: linear-gradient(135deg, #d97706, #f59e0b);">
                    <i class="fas fa-bread-slice"></i>
                </div>
                <div class="program-content">
                    <h3>BAKERI</h3>
                    <ul style="text-align: left; color: var(--text-light); font-size: 14px; line-height: 1.8;">
                        <li>Tahap 2 - Pembuatan Roti</li>
                        <li>Tahap 3 - Pembuatan Roti</li>
                        <li>Tahap 4 - Perkhidmatan Pastri Dan Roti</li>
                    </ul>
                    <a href="#" class="learn-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-card">
                <div class="program-image" style="background: linear-gradient(135deg, #1e40af, #3b82f6);">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="program-content">
                    <h3>SISTEM KOMPUTER</h3>
                    <ul style="text-align: left; color: var(--text-light); font-size: 14px; line-height: 1.8;">
                        <li>Tahap 3 - Operasi Sistem Komputer</li>
                    </ul>
                    <a href="#" class="learn-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="about">
        <div class="features-container">
            <div class="features-content">
                <h2>Why Choose YPAS?</h2>
                <p>We are committed to providing quality education that prepares students for real-world challenges. Our modern facilities and experienced faculty ensure you get the best learning experience.</p>
                <div class="feature-list">
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div>
                            <h4>Industry-Recognized Certificates</h4>
                            <p>Earn certifications that are valued by employers worldwide.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div>
                            <h4>Hands-On Training</h4>
                            <p>Gain practical experience through internships and real projects.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <h4>Career Support</h4>
                            <p>Access career counseling and job placement assistance.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <h4>Modern Facilities</h4>
                            <p>Learn in state-of-the-art classrooms and laboratories.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?auto=format&fit=crop&w=800&q=80" alt="Campus" style="width: 100%; border-radius: 20px; box-shadow: 0 25px 50px rgba(0,0,0,0.15);">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div>
                <h3>YP Advanced Skills</h3>
                <p>Building tomorrow's professionals through quality education and advanced skill development. Join us to transform your future.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div>
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#programs">Programs</a></li>
                    <li><a href="#admissions">Admissions</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3>Program</h3>
                <ul>
                    <li><a href="#">Kulinari</a></li>
                    <li><a href="#">Elektrik</a></li>
                    <li><a href="#">Pengurusan Pejabat</a></li>
                    <li><a href="#">Bakeri</a></li>
                    <li><a href="#">Sistem Komputer</a></li>
                </ul>
            </div>
            <div>
                <h3>Contact</h3>
                <ul>
                    <li><i class="fas fa-phone"></i> +609 567 1333</li>
                    <li><i class="fas fa-envelope"></i> info@ypas.edu.my</li>
                    <li><i class="fas fa-map-marker-alt"></i> Jalan Dato' Bahaman<br>Kubang Buaya, 25250<br>Kuantan, Pahang</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 YP Advanced Skills. All Rights Reserved. | Kolej Yayasan Pahang Advanced Skills</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 5px 20px rgba(0,0,0,0.15)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });

        // Mobile menu toggle
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-menu');

        mobileToggle.addEventListener('click', () => {
            navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
        });
    </script>
</body>
</html>
