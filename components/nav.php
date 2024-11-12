<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
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
            position: sticky;
            background-color: var(--primary-orange) !important;
            padding: 10px 0;
        }

        .join-now-btn {
            background-color: #36454F;
            color: #F0EAD6;
            padding: 8px 20px;
            border-radius: 5px;
            border: none;
        }

        /* New styles for centering */
        .navbar-collapse {
            justify-content: center;
        }

        .navbar-nav {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Ensure the button stays on the right */
        .join-now-btn-container {
            margin-left: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Prime Fit" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="class.php">CLASS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="membership.php">MEMBERSHIP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="highlight.php">HIGHLIGHT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="facilities.php">FACILITIES</a>
                    </li>
                </ul>
                <div class="join-now-btn-container">
                    <a href="registration.php"><button class="join-now-btn">JOIN NOW</button></a>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>