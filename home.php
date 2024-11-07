<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Fit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF4500;
        }
        .bg-primary-custom {
            background-color: var(--primary-color);
        }
        .text-primary-custom {
            color: var(--primary-color);
        }
        .btn-primary-custom {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }
        .btn-primary-custom:hover {
            background-color: #E63E00;
            color: white;
        }
        .hero-section {
            background-color: #2A2E32;
            color: white;
            padding: 100px 0;
            position: relative;
        }
        .navbar-custom {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <?php include "components/nav.php";
    ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="mb-4">Bosan dengan Rutinitas Gym yang Itu-Itu Saja?</h1>
                    <p class="mb-4">Prime Fit hadirkan pengalaman fitness unik dengan suasana menyenangkan, komunitas suportif, dan beragam kelas menarik dan seru!</p>
                    <a href="#" class="btn btn-primary-custom btn-lg">Gabung Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <img src="img/home1.png" alt="Gym Activity" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="img/home2.png" alt="Gym Equipment" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 bg-primary-custom text-white p-5">
                    <h2 class="mb-4">Prime Fit</h2>
                    <p>Prime Fit adalah pusat kebugaran modern yang menyediakan fasilitas lengkap untuk segala kebutuhan olahraga Anda. Dengan peralatan canggih, instruktur profesional, dan berbagai kelas kebugaran seperti yoga, HIIT, serta strength training, kami siap mendukung perjalanan Anda menuju hidup yang lebih sehat.</p>
                    <p>Di Prime Fit, kami menciptakan lingkungan yang positif dan mendukung, membantu setiap anggota mencapai target kebugaran mereka dengan nyaman dan efektif. Bergabunglah bersama kami dan rasakan transformasi nyata pada tubuh dan pikiran Anda!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilates Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="text-primary-custom mb-4">Satu-satunya Gym dengan Fasilitas Pilates Terlengkap dan Terbanyak</h2>
                    <div class="bg-white p-4 rounded">
                        <p>Mulai dari Rp 1juta-an/bulan, kamu sudah bisa mengikuti kelas Pilates setiap hari. Daftar membership Pilates+ sekarang</p>
                        <a href="#" class="btn btn-primary-custom">Gabung sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary-custom text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/logo.png" alt="Prime Fit Logo" height="40" class="mb-3">
                    <h5>Jam Operasional</h5>
                    <p>Setiap hari / 24 jam</p>
                    <h5>Layanan Konsumen</h5>
                    <p>08123456789111</p>
                </div>
                <div class="col-md-3">
                    <h5>Tentang kami</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Contact Us</a></li>
                        <li><a href="#" class="text-white">Location</a></li>
                        <li><a href="#" class="text-white">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Kelas</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Pilates</a></li>
                        <li><a href="#" class="text-white">GX Class</a></li>
                        <li><a href="#" class="text-white">Mind & Body</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Layanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Class</a></li>
                        <li><a href="#" class="text-white">Membership</a></li>
                    </ul>
                    <h5 class="mt-4">Ikuti kami di sosial media</h5>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</body>
</html>