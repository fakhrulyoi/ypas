<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YP Advanced Skills - Institusi Pendidikan Kemahiran Premier</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/university-theme.css') }}">
</head>
<body>

    <div class="mobile-menu-overlay" id="mobileOverlay"></div>

    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="top-contacts">
                <a href="tel:+6095671333"><i class="fas fa-phone-alt"></i> +609 567 1333</a>
                <span class="divider">|</span>
                <a href="mailto:info@ypas.edu.my"><i class="fas fa-envelope"></i> info@ypas.edu.my</a>
            </div>
            <div class="top-socials">
                <span>Ikuti Kami:</span>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="portal-link"><i class="fas fa-user-graduate"></i> Portal Pelajar</a>

                <button id="darkModeToggle" aria-label="Dark Mode Toggle">
                    <i class="fas fa-moon" id="toggleIcon"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Prayer Times Banner Section -->
    <div class="prayer-times-banner" id="prayerTimesBanner">
        <div class="container">
            <div class="prayer-times-wrapper">
                <div class="prayer-times-header">
                    <h3><i class="fas fa-mosque"></i> Waktu Solat Hari Ini</h3>
                    <p id="prayerDate">Sedang memuatkan...</p>
                </div>

                <div class="prayer-times-grid" id="prayerTimesGrid">
                    <div class="prayer-time-item">
                        <span class="prayer-label">Imsak</span>
                        <span class="prayer-time" id="imsak">--:--</span>
                    </div>
                    <div class="prayer-time-item">
                        <span class="prayer-label">Subuh</span>
                        <span class="prayer-time" id="subuh">--:--</span>
                    </div>
                    <div class="prayer-time-item">
                        <span class="prayer-label">Dhuha</span>
                        <span class="prayer-time" id="dhuha">--:--</span>
                    </div>
                    <div class="prayer-time-item">
                        <span class="prayer-label">Zohor</span>
                        <span class="prayer-time" id="zuhr">--:--</span>
                    </div>
                    <div class="prayer-time-item">
                        <span class="prayer-label">Asar</span>
                        <span class="prayer-time" id="asar">--:--</span>
                    </div>
                    <div class="prayer-time-item">
                        <span class="prayer-label">Maghrib</span>
                        <span class="prayer-time" id="maghrib">--:--</span>
                    </div>
                    <div class="prayer-time-item">
                        <span class="prayer-label">Isyak</span>
                        <span class="prayer-time" id="isyak">--:--</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="main-header" id="mainHeader">
        <div class="container header-inner">
            <div class="logo-wrapper">
                <div class="logo-text">
                    <span class="brand-sub">KOLEJ YAYASAN PAHANG</span>
                    <span class="brand-main">ADVANCED SKILLS</span>
                </div>
            </div>

            <nav class="desktop-nav">
                <ul class="nav-list">
                    <li><a href="#home" class="active">Utama</a></li>
                    <li><a href="#programs">Akademik & Program</a></li>
                    <li><a href="#tahfiz">Tahfiz Mahir</a></li>
                    <li><a href="#about">Mengenai Kami</a></li>
                </ul>
                <a href="#contact" class="btn btn-apply">Mohon Sekarang</a>
            </nav>

            <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <div class="mobile-nav" id="mobileNav">
        <div class="mobile-nav-header">
            <span>Menu</span>
            <button class="close-menu" id="closeMenu"><i class="fas fa-times"></i></button>
        </div>
        <ul class="mobile-nav-list">
            <li><a href="#home">Utama</a></li>
            <li><a href="#programs">Akademik & Program</a></li>
            <li><a href="#tahfiz">Tahfiz Mahir</a></li>
            <li><a href="#about">Mengenai Kami</a></li>
            <li><a href="#contact">Hubungi</a></li>
        </ul>
    </div>

    <section class="hero-section" id="home">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text-wrapper fade-in-up">
                <span class="hero-badge"><i class="fas fa-certificate"></i> Diiktiraf Jabatan Pembangunan Kemahiran</span>
                <h1>Melahirkan Generasi <br><em>Profesional & Berkemahiran</em></h1>
                <p class="hero-sub">Sertai institusi pendidikan premier yang menggabungkan latihan praktikal industri dengan pembangunan sahsiah diri.</p>
                <div class="hero-actions">
                    <a href="#programs" class="btn btn-primary btn-lg">Terokai Program</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg">Hubungi Penasihat</a>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-banner">
        <div class="container stats-grid">
            <div class="stat-item">
                <span class="stat-number">99%</span>
                <span class="stat-label">Kadar Kebolehpasaran</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">20+</span>
                <span class="stat-label">Rakan Industri</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">100%</span>
                <span class="stat-label">Latihan Amali</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">5★</span>
                <span class="stat-label">Penarafan Kualiti</span>
            </div>
        </div>
    </section>

    <section class="section programs-section" id="programs">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle">Pilihan Akademik</span>
                <h2 class="section-title">Fakulti & Pusat Pengajian</h2>
                <div class="title-underline"></div>
            </div>

            <div class="program-tabs">
                <button class="tab-btn active" data-target="main-skills">Sijil & Diploma Kemahiran</button>
                <button class="tab-btn" data-target="career-guarantee">Program Jaminan Kerjaya</button>
            </div>

            <div class="program-content active" id="main-skills">
                <div class="cards-grid">
                    <article class="course-card">
                        <div class="card-image course-image-wrapper">
                            <img src="{{ asset('kulinari.png') }}"  class="course-main-image">
                            <div class="card-icon"><i class="fas fa-utensils"></i></div>
                        </div>
                        <div class="card-body">
                            <h3>Seni Kulinari</h3>
                            <p class="course-code">HT-012 Series</p>
                            <ul class="course-specs">
                                <li><i class="fas fa-check"></i> Penyediaan Makanan (T2)</li>
                                <li><i class="fas fa-check"></i> Pembuatan Makanan (T3)</li>
                                <li><i class="fas fa-check"></i> Pengurusan Dapur (T4)</li>
                            </ul>
                            <a href="#contact" class="read-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="course-card">
                        <div class="card-image course-image-wrapper">
                            <img src="{{ asset('elektrik.png') }}"  alt="Electrician working on a circuit panel" class="course-main-image">
                            <div class="card-icon"><i class="fas fa-bolt"></i></div>
                        </div>
                        <div class="card-body">
                            <h3>Teknologi Elektrik</h3>
                            <p class="course-code">F432 Series</p>
                            <ul class="course-specs">
                                <li><i class="fas fa-check"></i> Instalasi Asas (T2)</li>
                                <li><i class="fas fa-check"></i> Penyelenggaraan 1 Fasa (T3)</li>
                                <li><i class="fas fa-check"></i> Penyelenggaraan 3 Fasa (T3)</li>
                            </ul>
                            <a href="#contact" class="read-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="course-card">
                        <div class="card-image course-image-wrapper">
                            <img src="{{ asset('pejabat.png') }}"  alt="Well-organized modern office desk with laptop" class="course-main-image">
                            <div class="card-icon"><i class="fas fa-laptop-file"></i></div>
                        </div>
                        <div class="card-body">
                            <h3>Pengurusan Pejabat</h3>
                            <p class="course-code">N821 / FB-025</p>
                            <ul class="course-specs">
                                <li><i class="fas fa-check"></i> Operasi Sistem (T3)</li>
                                <li><i class="fas fa-check"></i> Pentadbiran Pejabat (T4)</li>
                                <li><i class="fas fa-check"></i> Pengurusan Rekod</li>
                            </ul>
                            <a href="#contact" class="read-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                     <article class="course-card">
                        <div class="card-image course-image-wrapper">
                            <img src="{{ asset('bakeri.png') }}" alt="Hands kneading bread dough or decorating a pastry" class="course-main-image">
                            <div class="card-icon"><i class="fas fa-bread-slice"></i></div>
                        </div>
                        <div class="card-body">
                            <h3>Seni Bakeri & Pastri</h3>
                            <p class="course-code">HT-013 Series</p>
                            <ul class="course-specs">
                                <li><i class="fas fa-check"></i> Pembuatan Roti (T2 & T3)</li>
                                <li><i class="fas fa-check"></i> Perkhidmatan Pastri (T4)</li>
                                <li><i class="fas fa-check"></i> Dekorasi Kek</li>
                            </ul>
                            <a href="#contact" class="read-more">Maklumat Lanjut <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="program-content" id="career-guarantee">
                <div class="career-grid">
                    <div class="career-card">
                        <div class="cc-header">
                            <h4>Oil & Gas / Offshore</h4>
                        </div>
                        <div class="cc-body">
                            <ul>
                                <li>Hospitality Services</li>
                                <li>Scaffolding L1 / Rigger L1</li>
                                <li>Offshore Safety Promoter</li>
                            </ul>
                        </div>
                    </div>

                    <div class="career-card">
                        <div class="cc-header">
                            <h4>Industri Teknikal</h4>
                        </div>
                        <div class="cc-body">
                            <ul>
                                <li>Fiber Optic Technician</li>
                                <li>Railway Systems Technology</li>
                                <li>IoT Technology</li>
                                <li>Welding (6G)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="career-card">
                        <div class="cc-header">
                            <h4>Perkhidmatan Profesional</h4>
                        </div>
                        <div class="cc-body">
                            <ul>
                                <li>Professional Butcher</li>
                                <li>Barbering Course</li>
                                <li>Live Hosting & Streaming</li>
                                <li>Maritime Catering</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section tahfiz-section" id="tahfiz">
        <div class="container">
            <div class="tahfiz-wrapper">
                <div class="tahfiz-content">
                    <span class="badge-gold">Program Istimewa</span>
                    <h2>Tahfiz Mahir <span class="text-gold">Yayasan Pahang</span></h2>
                    <p class="lead">Membangunkan huffaz yang bukan sahaja celik Al-Quran, malah mempunyai kemahiran teknikal yang tinggi untuk bersaing dalam industri global.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="f-icon"><i class="fas fa-hand-holding-dollar"></i></div>
                            <div class="f-text">
                                <strong>Tajaan Penuh & Elaun</strong>
                                <p>Penginapan, pengangkutan dan elaun bulanan disediakan.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="f-icon"><i class="fas fa-briefcase"></i></div>
                            <div class="f-text">
                                <strong>Jaminan Kerjaya</strong>
                                <p>Penempatan kerja terus selepas tamat latihan.</p>
                            </div>
                        </div>
                    </div>

                    <a href="#contact" class="btn btn-primary mt-4">Mohon Program Tahfiz</a>
                </div>
                <div class="tahfiz-visual">
                    <div class="image-stack">
                        <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?auto=format&fit=crop&w=600&q=80" alt="Pelajar Tahfiz" class="img-front">
                        <div class="img-back-pattern"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section contact-section" id="contact">
        <div class="container">
            <div class="contact-box-v2 fade-in-up">
                <div class="contact-grid-v2">
                    <div class="contact-info-column">
                        <div class="contact-header">
                            <span class="section-subtitle-small">Hubungi Kami</span>
                            <h2>Mari Bekerja Bersama!</h2>
                            <p>Pegawai pengambilan kami sedia membantu anda memilih haluan kerjaya yang tepat. Hubungi kami melalui talian terus atau isi borang ringkas di sebelah.</p>
                        </div>

                        <div class="detail-group">
                            <div class="detail-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h4>Kampus Utama</h4>
                                    <p>Kolej Yayasan Pahang Advanced Skills, Jalan Dato' Bahaman, Kubang Buaya, 25250 Kuantan, Pahang.</p>
                                    <a href="https://maps.app.goo.gl/YourMapLink" target="_blank" class="read-more">Lihat Di Peta <i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>

                            <div class="detail-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <h4>E-mel Rasmi</h4>
                                    <p>info@ypas.edu.my</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form-column">
                        <h4>Minta Panggilan Balik</h4>
                        <form class="contact-form-v2">
                            <input type="text" placeholder="Nama Penuh Anda" required>
                            <input type="email" placeholder="E-mel / Nombor Telefon" required>
                            <textarea placeholder="Pertanyaan Ringkas Anda (Pilihan)" rows="4"></textarea>
                            <button type="submit" class="btn btn-primary btn-lg">Hantar Pertanyaan</button>
                        </form>

                        <div class="phone-list-v2">
                            <p class="mt-3 text-center" style="color: var(--text-muted); font-size: 0.9rem;">Atau Hubungi Terus:</p>
                            <ul class="list-unstyled text-center d-flex justify-content-center flex-wrap gap-2 mt-2">
                                <li>En. Shamsul: <a href="tel:0123757664" style="color: var(--primary); font-weight: 600;">012-375 7664</a></li>
                                <li>En. Amirul: <a href="tel:0179278412" style="color: var(--primary); font-weight: 600;">017-927 8412</a></li>
                                <li>Pejabat: <a href="tel:095671333" style="color: var(--primary); font-weight: 600;">09-567 1333</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>

    <footer class="main-footer">
        <div class="container footer-content">
            <div class="footer-brand">
                <h5>YP Advanced Skills</h5>
                <p>Peneraju pendidikan TVET yang holistik dan diiktiraf industri di Pantai Timur.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h6>Pautan</h6>
                <ul>
                    <li><a href="#home">Utama</a></li>
                    <li><a href="#programs">Program</a></li>
                    <li><a href="#contact">Hubungi</a></li>
                    <li><a href="#">Portal Alumni</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h6>Program Popular</h6>
                <ul>
                    <li><a href="#">Seni Kulinari</a></li>
                    <li><a href="#">Teknologi Elektrik</a></li>
                    <li><a href="#">Oil & Gas</a></li>
                    <li><a href="#">Pengurusan Pejabat</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>© 2025 YP Advanced Skills. Hak Cipta Terpelihara.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/university-main.js') }}"></script>
</body>
</html>
