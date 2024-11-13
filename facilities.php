<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Fit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/facilities.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: normal;
        }

        .facilities-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid #ddd;
            margin-bottom: 2rem;
        }

        .facilities-tabs a {
            color: #ff4500;
            text-decoration: none;
            padding: 0.5rem 0;
            font-size: 14px;
        }

        .facilities-tabs a:hover {
            border-bottom: 2px solid #ff4500;
        }

        .facility-section {
            margin-bottom: 3rem;
        }

        .facility-section h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .facility-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

        .facility-description {
            background-color: #36454F;
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            height: 80%;
            display: flex;
            align-items: center;
            font-size: 14px;
            line-height: 1.6;
        }

        footer {
            background-color: #ff4500;
            color: white;
            padding: 2rem 0;
        }

        footer img {
            width: 30px;
            height: 30px;
            margin-bottom: 1rem;
        }

        footer h5 {
            font-size: 16px;
            margin-bottom: 1rem;
        }

        footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        footer ul li {
            margin-bottom: 0.5rem;
        }

        footer a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .contact-info {
            font-size: 14px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <?php 
        include "components/nav.php";
    ?>
    <br>
    <br>
    <div class="hero-section">
        <h1><b>Fasilitas Prime Fit</b></h1>
    </div>

    <div class="container">
        <div class="facilities-tabs">
            <a href="#weightlifting">Weightlifting and cardio</a>
            <a href="#pilates">Pilates Studio</a>
            <a href="#recovery">Recovery Room</a>
            <a href="#cycling">Cycling Studio</a>
            <a href="#locker">Locker Room</a>
        </div>

        <section id="weightlifting" class="facility-section">
            <h3>Weightlifting and Cardio</h3>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="img/wl&cardio.jpg" alt="Weightlifting Area" class="facility-image">
                </div>
                <div class="col-md-6">
                    <div class="facility-description">
                        <p>Fasilitas Weightlifting dan Cardio kami dilengkapi dengan peralatan modern dan ruang nyaman. Tersedia pelatih profesional, kelas kardio variatif, serta area pemanasan untuk mendukung kebutuhan latihan Anda. Personal trainer siap membantu sesuai jam operasional yang ditentukan.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="pilates" class="facility-section">
            <h3>Pilates Studio</h3>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="img/pilatesroom.jpg" alt="Pilates Studio" class="facility-image">
                </div>
                <div class="col-md-6">
                    <div class="facility-description">
                        <p>Fasilitas Pilates Studio kami menawarkan ruang tenang untuk praktek Pilates dengan peralatan lengkap. Instruktur bersertifikat memberikan bimbingan personal dalam kelas yang berfokus pada peningkatan postur, fleksibilitas, dan kekuatan inti.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="recovery" class="facility-section">
            <h3>Recovery Room</h3>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="img/recoveryrom.png" alt="Recovery Room" class="facility-image">
                </div>
                <div class="col-md-6">
                    <div class="facility-description">
                        <p>Fasilitas Recovery Room kami menyediakan ruang nyaman dengan peralatan pemulihan modern, seperti masaji kompresif dan foam roller. Tersedia terapi inframerah dan pijat terapeutik untuk meredakan ketegangan otot, serta program pemulihan yang disesuaikan dengan kebutuhan.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="locker" class="facility-section">
            <h3>Locker Room</h3>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="img/locker.jpg" alt="Locker Room" class="facility-image">
                </div>
                <div class="col-md-6">
                    <div class="facility-description">
                        <p>Fasilitas Locker Room kami menawarkan ruang ganti yang bersih dan nyaman dengan lemari pribadi untuk penyimpanan aman. Dilengkapi dengan shower, perlengkapan mandi berkualitas, dan pengering rambut, serta area khusus untuk mempersiapkan diri sebelum dan setelah latihan.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="cycling" class="facility-section">
            <h3>Cycling Room</h3>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="img/cyclingroom.jpg" alt="Cycling Room" class="facility-image">
                </div>
                <div class="col-md-6">
                    <div class="facility-description">
                        <p>Rasakan pengalaman bersepeda di Cycling Studio Prime Fit Studio ini menjadi satu-satunya Cycling studio di Indonesia yang menawarkan kelas bersepeda secara imersif!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include "components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>