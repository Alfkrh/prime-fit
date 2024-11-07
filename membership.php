<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Fit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.css" rel="stylesheet">
    <style>
        :root {
            --prime-orange: #FF4500;
        }
        
        .membership-title {
            font-size: 2.5rem;
            font-weight: bold;
        }
        
        .membership-title span {
            color: var(--prime-orange);
        }
        
        .benefit-card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1.5rem;
            height: 100%;
            display: flex;
            align-items: start;
            gap: 1rem;
        }
        
        .icon-wrapper {
            width: 40px;
        }
        
        .cta-section {
            background-color: #36454F;
            color: white;
            padding: 4rem 0;
        }
        
        .faq-section {
            padding: 4rem 0;
        }
        
        .faq-item {
            border: 1px solid #dee2e6;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .footer {
            background-color: var(--prime-orange);
            color: white;
            padding: 3rem 0;
        }
    </style>
</head>
<body>
    <?php include "components/nav.php";
    ?>

    <!-- Membership Benefits -->
    <section class="container py-5">
        <h1 class="membership-title">Keuntungan <span>Join Membership</span></h1>
        <p class="mb-5">Nikmati akses penuh ke semua fasilitas dan kelas eksklusif di Prime Fit</p>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="icon-wrapper">
                        <img src="img/membericon1.png" alt="Facilities" width="30">
                    </div>
                    <h5>Fasilitas Terlengkap</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="icon-wrapper">
                        <img src="img/membericon2.png" alt="Access" width="30">
                    </div>
                    <h5>Bebas Akses ke Semua Club Prime Fit</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="icon-wrapper">
                        <img src="img/membericon3.png" alt="Class" width="30">
                    </div>
                    <h5>Memiliki Banyak Variasi Kelas</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="icon-wrapper">
                        <img src="img/membericon4.png" alt="24 Hours" width="30">
                    </div>
                    <h5>Akses 24 Jam Setiap Hari</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="icon-wrapper">
                        <img src="img/membericon5.png" alt="Pilates" width="30">
                    </div>
                    <h5>Kelas Grup Pilates+ Terbesar & Terlengkap di Indonesia</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="icon-wrapper">
                        <img src="img/membericon6.png" alt="Towel" width="30">
                    </div>
                    <h5>Tersedia Peminjaman Handuk Gratis</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2><b>Ingin Tahu<br>Keseruan di Prime Fitness?</b></h2>
                    <button class="btn btn-danger mt-4">Learn more</button>
                </div>
                <div class="col-lg-6">
                    <img src="img/membership.png" alt="Fitness" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="text-center mb-5"><b>FAQ</b></h2>
            <div class="faq-list">
                <div class="faq-item">
                    <span>Dimanakah Lokasi Prime Fit?</span>
                    <i class="arrow">›</i>
                </div>
                <div class="faq-item">
                    <span>Bagaimana cara bergabung di Prime Fit?</span>
                    <i class="arrow">›</i>
                </div>
                <div class="faq-item">
                    <span>Apakah membership di Prime Fit dapat diakses keseluruh club?</span>
                    <i class="arrow">›</i>
                </div>
                <div class="faq-item">
                    <span>Bagaimana cara mendaftar kelas Prime Fit?</span>
                    <i class="arrow">›</i>
                </div>
                <div class="faq-item">
                    <span>Apakah Prime Fit dapat diakses per-visit?</span>
                    <i class="arrow">›</i>
                </div>
                <div class="faq-item">
                    <span>Apakah Prime Fit memiliki media sosial?</span>
                    <i class="arrow">›</i>
                </div>
            </div>
        </div>
    </section>

        <?php include "components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>