<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Fit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-orange: #FF4500;
            --dark-teal: #2C3539;
        }
        
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .navbar {
            background-color: var(--primary-orange) !important;
            padding: 15px 0;
        }

        .join-now-btn {
            background-color: #36454F;
            color: #F0EAD6;
            padding: 8px 20px;
            border-radius: 5px;
            border: none;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/class.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }

        .class-section {
            background-color: var(--dark-teal);
            color: white;
            padding: 50px 0;
        }

        .class-card {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
            height: 200px;
        }

        .class-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .class-card .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            color: white;
            font-weight: bold;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
        }

        .cta-section {
            padding: 80px 0;
            text-align: center;
            background-color: white;
        }

        .orange-btn {
            background-color: var(--primary-orange);
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            border: none;
            font-weight: bold;
        }

        footer {
            background-color: var(--primary-orange);
            color: white;
            padding: 50px 0;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
        }

        .social-icons a {
            margin-right: 15px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php include "components/nav.php";
    ?>
<br>
<br>
    <section class="hero-section">
        <div class="container">
            <h1>Pilihan Kelas Seru dan Jadwal Fleksibel!</h1>
            <p class="mt-3">Dari Pilates+ Hingga GX CLASS, Beragam Kelas Seru dengan Jadwal yang Bisa Kamu Sesuaikan!</p>
        </div>
    </section>

    <section class="class-section">
        <div class="container">
            <h2 class="mb-4">GX Class</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/gxclass1.jpg" alt="Strength Workout">
                        <div class="overlay">Strength Workout</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/gxcalss2.jpg" alt="Cardio Workout">
                        <div class="overlay">Cardio Workout</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/gxclass3.jpg" alt="Dance Choreography">
                        <div class="overlay">Dance Choreography</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mind & Body Section -->
    <section class="class-section">
        <div class="container">
            <h2 class="mb-4">Mind & Body</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/mindbody1.jpg" alt="Basic">
                        <div class="overlay">Basic</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/mindbody2.jpg" alt="Intermediate">
                        <div class="overlay">Intermediate</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/mindbody3.jpg" alt="Intermediate Advance">
                        <div class="overlay">Intermediate Advance</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GX Class Section 2 -->
    <section class="class-section">
        <div class="container">
            <h2 class="mb-4">Pilates+</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/pilates1.jpg" alt="Basic">
                        <div class="overlay">Basic</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/pilates2.jpg" alt="Intermediate">
                        <div class="overlay">Intermediate</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card">
                        <img src="img/pilates3.jpg" alt="Intermediate Advance">
                        <div class="overlay">Intermediate Advance</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="mb-3">Siap Jadi Versi Terbaik Dirimu?</h2>
            <p class="mb-4">Yuk, mulai perjalanan sehatmu bersama Prime Fit dan rasakan perubahannya!</p>
            <button class="orange-btn">Gabung Sekarang</button>
        </div>
    </section>

    <?php include "components/footer.php"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>