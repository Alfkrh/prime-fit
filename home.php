<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Fit - Fitness Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-orange: #FF4500;
        }
        
        body {
            font-family: Arial, sans-serif;
        }
        
        .hero-section {
            background-color: #36454F;
            color: white;
            min-height: 600px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            padding: 20px 0;
        }
        
        .hero-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .hero-text {
            font-size: 18px;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .gabung-btn {
            background-color: var(--primary-orange);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }
        
        .prime-fit-section {
            background-color: var(--primary-orange);
            color: white;
            padding: 80px 0;
        }
        
        .prime-fit-title {
            font-size: 42px;
            margin-bottom: 30px;
        }
        
        .pilates-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        
        .pilates-title {
            color: var(--primary-orange);
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        
        .footer {
            background-color: var(--primary-orange);
            color: white;
            padding: 50px 0;
        }
        
        .footer a {
            color: white;
            text-decoration: none;
        }
        
        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .footer ul li {
            margin-bottom: 10px;
        }
        
        .gym-equipment-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include "components/nav.php";
    ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Bosan dengan Rutinitas Gym yang Itu-Itu Saja?</h1>
                    <p class="hero-text">Prime Fit hadirkan pengalaman fitness unik dengan suasana menyenangkan, komunitas suportif, dan beragam kelas menarik dan seru!</p>
                    <a href="registration.php"><button class="gabung-btn">Gabung Sekarang</button></a>
                </div>
                <div class="col-lg-6">
                    <img src="img/home1.png" alt="Gym Activities" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Prime Fit Section -->
    <section class="prime-fit-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="img/home2.png" alt="Gym Equipment" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="prime-fit-title"><b>Prime Fit</b></h2>
                    <p>Prime Fit adalah pusat kebugaran modern yang menyediakan fasilitas lengkap untuk segala kebutuhan olahraga Anda. Dengan peralatan canggih, instruktur profesional, dan berbagai kelas kebugaran seperti yoga, HIIT, serta strength training, kami siap mendukung perjalanan Anda menuju hidup yang lebih sehat. Di Prime Fit, kami menciptakan lingkungan yang positif dan mendukung, membantu setiap anggota mencapai target kebugaran mereka dengan nyaman dan efektif. Bergabunglah bersama kami dan rasakan transformasi nyata pada tubuh dan pikiran Anda!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilates Section -->
    <section class="pilates-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="pilates-title">Satu-satunya Gym dengan Fasilitas Pilates Terlengkap dan Terbanyak</h2>
                    <div class="bg-white p-4 rounded shadow-sm">
                        <p class="mb-3">Mulai dari Rp 130.000-an/bulan, kamu sudah bisa mengikuti kelas Pilates setiap hari. Daftar membership Pilates+ sekarang</p>
                        <a href="registration.php"><button class="gabung-btn">Gabung sekarang</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>