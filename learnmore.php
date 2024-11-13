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
    <?php include "components/nav.php";
    ?>

    <br>
    <br>

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

    <!-- Konsultasi Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-4 mb-3"><b>Mau Nge-Gym tapi<br>Takut Suasananya<br><span class="text-danger">Bikin Males?</b></span></h2>
                    <p class="lead">Apa pun tujuan nge-gym kamu, kita jamin suasananya selalu dibikin asik!</p>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="https://wa.me/message/QWKS7GZQ7DQGC1"><button class="btn-konsultasi">Konsultasi Sekarang</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="display-5 mb-4"><b>Latihan Seru, Waktu Fleksibel, Semua Bisa di Sini!</b></h2>
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

    <?php include "components/footer.php";
    ?>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>