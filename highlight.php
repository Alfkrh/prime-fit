<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Fit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-orange: #FF4500;
        }
        
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('img/highlight.jpg');
            background-size: cover;
            background-position: center;
            height: 520px;
            display: flex;
            align-items: center;
        }
        
        .hero-content {
            padding-left: 20px;
        }
        
        .hero-content h1 {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.1;
            color: white;
            margin-bottom: 24px;
        }
        
        .hero-content p {
            font-size: 16px;
            color: white;
            line-height: 1.5;
        }
        
        .strength-section {
            padding: 80px 0;
        }
        
        .strength-title {
            font-size: 42px;
            font-weight: 700;
            color: #FF4500;
            margin-bottom: 24px;
            line-height: 1.2;
        }
        
        .strength-text {
            color: #4a4a4a;
            font-size: 16px;
            line-height: 1.8;
        }
        
        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        
        .training-image {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .push-beyond {
            background-color: var(--primary-orange);
            padding: 40px;
            border-radius: 8px;
            color: white;
            margin-top: 40px;
        }
        
        .push-beyond h2 {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 24px;
        }
        
        .push-beyond p {
            font-size: 16px;
            line-height: 1.8;
        }
        
        .pillars-section {
            padding: 80px 0;
            background-color: #36454F;
        }
        
        .pillars-title {
            font-size: 42px;
            font-weight: 700;
            color: #FFFF;
            margin-bottom: 24px;
            line-height: 1.2;
        }
        
        .pillars-text {
            color: #FFFF;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 40px;
        }
        
        .pillar-card {
            background-color: #e9ecef;
            padding: 30px;
            border-radius: 8px;
            height: 100%;
        }
        
        .pillar-icon {
            color: var(--primary-orange);
            font-size: 24px;
            margin-bottom: 16px;
        }
        
        .pillar-card h3 {
            font-size: 20px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 16px;
        }
        
        .pillar-card p {
            color: #4a4a4a;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }
        
        footer {
            background-color: var(--primary-orange);
            color: white;
            padding: 60px 0 40px;
        }
        
    </style>
</head>
<body>
    <?php include "components/nav.php";
    ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>RESULTS-<br>FOCUSED<br>TRAINING</h1>
                <p>Get pumped for a fitter, stronger you!<br>
                Realise your full potential with our<br>
                Certified Fitness Coaches</p>
            </div>
        </div>
    </section>

    <!-- Strength Section -->
    <section class="strength-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="strength-title">Strength is Earned,<br>Not Given</h2>
                    <p class="strength-text">Kesuksesan tidak diberikan, itu diperoleh.<br>
                    Satu repetisi, satu set, satu hari pada satu<br>
                    waktu. Dorong melewati batasmu, dan<br>
                    biarkan keringat menjadi pengingat<br>
                    bahwa kamu lebih kuat dari kemarin.</p>
                </div>
                <div class="col-lg-6">
                    <div class="image-grid">
                        <img src="img/hl2.jpg" alt="Training" class="training-image">
                        <img src="img/hl1.jpg" alt="Training" class="training-image">
                        <img src="img/hl3.jpg" alt="Training" class="training-image">
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <div class="image-grid">
                        <img src="img/hl5.jpg" alt="Training" class="training-image">
                        <img src="img/hl4.jpg" alt="Training" class="training-image">
                        <img src="img/hl6.jpg" alt="Training" class="training-image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="push-beyond">
                        <h2>Push Beyond<br>Your Limits</h2>
                        <p>Jangan berhenti saat kamu lelah, berhenti saat<br>
                        kamu selesai. Setiap tetes keringat adalah<br>
                        langkah lebih dekat menuju tujuanmu. Teruslah<br>
                        dorong dirimu, satu-satunya batasanmu adalah<br>
                        dirimu sendiri.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5 Key Pillars Section -->
    <section class="pillars-section">
        <div class="container">
            <h2 class="pillars-title">5 KEY PILLARS<br>OF FITNESS</h2>
            <p class="pillars-text">Rangkul lima pilar kebugaran. Berdirilah tegak<br>
            dengan postur yang baik. Bergeraklah bebas dengan<br>
            mobilitas. Bangun inti yang kuat. Perkuat tubuh dan<br>
            pikiranmu. Nyalakan energimu dengan kardio. Ubah<br>
            ketasanmu menjadi pencapaian dan lepaskan<br>
            potensi sejatimu.</p>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="pillar-card">
                        <i class="fas fa-user pillar-icon"></i>
                        <h3>POSTURE</h3>
                        <p>Memperbaiki postur akan mengurangi stres dan ketegangan pada tubuhmu. 
                        Kamu akan berdiri lebih tegak, bergerak lebih baik, dan merasa lebih sedikit lelah.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="pillar-card">
                        <i class="fas fa-running pillar-icon"></i>
                        <h3>MOBILITY</h3>
                        <p>Mobilitas yang baik memungkinkan tubuhmu bergerak sesuai dengan alaminya, 
                        bebas dari rasa sakit dan dengan rentang gerak yang optimal.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="pillar-card">
                        <i class="fas fa-circle pillar-icon"></i>
                        <h3>CORE</h3>
                        <p>Core adalah bagian dari hampir setiap gerakan yang kamu lakukan. 
                        Otot inti yang kuat berperan sebagai penstabil, membuat gerakan lebih aman dan efisien.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="pillar-card">
                        <i class="fas fa-dumbbell pillar-icon"></i>
                        <h3>STRENGTH</h3>
                        <p>Latihan kekuatan membantu kamu membangun tulang yang kuat, mengelola berat badan, 
                        dan memudahkanmu melakukan aktivitas sehari-hari dengan lebih baik dan lebih mudah.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="pillar-card">
                        <i class="fas fa-heartbeat pillar-icon"></i>
                        <h3>CARDIO</h3>
                        <p>Meningkatkan kardio akan memperkuat stamina dan daya tahanmu sehingga 
                        kamu bisa bekerja lebih keras dalam waktu lebih lama dan membakar lebih banyak kalori.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include "components/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>