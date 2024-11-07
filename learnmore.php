<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Fit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --prime-orange: #FF4500;
            --dark-teal: #2C3436;
        }
        
        .navbar {
            background-color: var(--prime-orange);
            padding: 1rem 0;
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 0 1rem !important;
        }
        
        .btn-join {
            background-color: #2C3333;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
        }

        .hero-section {
            background-color: var(--dark-teal);
            color: white;
            padding: 4rem 0;
        }

        .hero-image {
            border-radius: 15px;
            overflow: hidden;
        }

        .cta-section {
            padding: 4rem 0;
        }

        .features-section {
            background-color: var(--dark-teal);
            color: white;
            padding: 4rem 0;
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            margin-bottom: 1rem;
        }

        .feature-item {
            margin-bottom: 2rem;
        }

        .footer {
            background-color: var(--prime-orange);
            color: white;
            padding: 3rem 0;
        }

        .btn-konsultasi {
            background-color: var(--prime-orange);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            border: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo-white.png" alt="Prime Fit" height="40">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CLASS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MEMBERSHIP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HIGHLIGHT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FACILITIES</a>
                    </li>
                </ul>
                <button class="btn btn-dark">JOIN NOW</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="mb-4">Bosan dengan<br>Rutinitas Gym yang<br>Itu-Itu Saja?</h1>
                    <p>Prime Fit hadirkan pengalaman fitness unik dengan suasana menyenangkan, komunitas suportif, dan beragam kelas menarik dan seru!</p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="img/learnmore.jpg" alt="Fitness Group" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-4 mb-3">Mau Nge-Gym tapi<br>Takut Suasananya<br><span class="text-danger">Bikin Males?</span></h2>
                    <p class="lead">Apa pun tujuan nge-gym kamu, kita jamin suasananya selalu dibikin asik!</p>
                </div>
                <div class="col-lg-4 text-end">
                    <button class="btn-konsultasi">Konsultasi Sekarang</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="display-5 mb-4">Latihan Seru, Waktu Fleksibel, Semua Bisa di Sini!</h2>
                    <p>Kamu ngerasa susah jaga berat badan ideal? Sibuk, tapi pengen kurangi stres, ningkatin percaya diri, dan perluas networking? Join Prime Fit bisa jadi solusi yang pas banget buat kamu!</p>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="feature-item d-flex align-items-start">
                        <img src="img/lm1.png" alt="Schedule" class="feature-icon me-3">
                        <div>
                            <h4>Jadwalnya yang fleksibel</h4>
                            <p>Sesuaikan waktu latihan dengan rutinitasmu tanpa khawatir jadwal bentrok.</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex align-items-start">
                        <img src="img/lm2.png" alt="Personal" class="feature-icon me-3">
                        <div>
                            <h4>Latihan bisa dipersonalisasi</h4>
                            <p>Dapatkan program latihan yang sesuai dengan kebutuhan dan tujuanmu.</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex align-items-start">
                        <img src="img/lm3.png" alt="Group" class="feature-icon me-3">
                        <div>
                            <h4>Bisa latihan dengan grup</h4>
                            <p>Latihan bareng komunitas untuk motivasi lebih dan suasana seru.</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex align-items-start">
                        <img src="img/lm4.png" alt="Facilities" class="feature-icon me-3">
                        <div>
                            <h4>Punya fasilitas yang lengkap</h4>
                            <p>Nikmati berbagai alat dan fasilitas modern yang mendukung latihanmu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <img src="logo-white.png" alt="Prime Fit" height="40" class="mb-3">
                    <div class="mb-4">
                        <h5>Jam Operasional</h5>
                        <p>Setiap hari / 24 jam</p>
                    </div>
                    <div>
                        <h5>Layanan Konsumen</h5>
                        <p>081224567891</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Tentang kami</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Contact Us</a></li>
                        <li><a href="#" class="text-white">Location</a></li>
                        <li><a href="#" class="text-white">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Kelas</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Pilates</a></li>
                        <li><a href="#" class="text-white">GX Class</a></li>
                        <li><a href="#" class="text-white">Mind & Body</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Ikuti kami di sosial media</h5>
                    <div class="social-icons mt-3">
                        <img src="/icons/instagram.svg" alt="Instagram" class="me-2">
                        <img src="/icons/youtube.svg" alt="YouTube" class="me-2">
                        <img src="/icons/facebook.svg" alt="Facebook" class="me-2">
                        <img src="/icons/linkedin.svg" alt="LinkedIn">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>