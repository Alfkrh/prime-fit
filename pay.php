<?php
session_start();

// If no form data in session, redirect back
if (!isset($_SESSION['formData'])) {
    header('Location: registration.php');
    exit;
}

$formData = $_SESSION['formData'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review and Pay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border-radius: 10px;
            background-color: #f8f9fa;
            margin-bottom: 20px;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: transparent;
            border: none;
            font-size: 24px;
            color: #FF5722;
            cursor: pointer;
        }
        .payment-option {
            border: 1px solid #dee2e6;
            padding: 15px;
            border-radius: 8px;
            cursor: pointer;
            background: white;
        }
        .payment-option.active {
            border-color: #FF5722;
            background-color: #fff5f2;
        }
        .pay-button {
            background-color: #FF5722;
            border: none;
            padding: 12px 40px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="bg-light">
    <a href="registration.php" class="back-button">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
    </a>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">REVIEW AND PAY</h2>
                
                <!-- Personal Details Card -->
                <div class="card p-4 mb-4">
                    <h5 class="mb-3">REVIEW AND PAY</h5>
                    <div class="detail-row">
                        <span>First name</span>
                        <span><?php echo htmlspecialchars($formData['firstName']); ?></span>
                    </div>
                    <div class="detail-row">
                        <span>Last name</span>
                        <span><?php echo htmlspecialchars($formData['lastName']); ?></span>
                    </div>
                    <div class="detail-row">
                        <span>Date of birth</span>
                        <span><?php echo htmlspecialchars($formData['dateOfBirth']); ?></span>
                    </div>
                    <div class="detail-row">
                        <span>Email address</span>
                        <span><?php echo htmlspecialchars($formData['email']); ?></span>
                    </div>
                    <div class="detail-row">
                        <span>Mobile phone number</span>
                        <span><?php echo htmlspecialchars($formData['phoneNumber']); ?></span>
                    </div>
                </div>

                <!-- Membership Survey Card -->
                <div class="card p-4 mb-4">
                    <h5 class="mb-3">MEMBERSHIP SURVEY</h5>
                    <div class="detail-row">
                        <span>Home Club</span>
                        <span><?php echo htmlspecialchars($formData['clubChoice']); ?></span>
                    </div>
                    <div class="detail-row">
                        <span>Starting date</span>
                        <span><?php echo htmlspecialchars($formData['startingDate']); ?></span>
                    </div>
                    <div class="detail-row">
                        <span>Duration</span>
                        <span>12 month</span>
                    </div>
                </div>

                <!-- Package Details Card -->
                <div class="card p-4">
                    <h5 class="mb-3">PACKAGE DETAILS</h5>
                    <div class="detail-row">
                        <span>Package</span>
                        <span>IDR 130,000.00/month</span>
                    </div>
                    <?php if ($formData['accessLevel'] === 'Upgrade to Prime Fit Plus + IDR 250,000.00/month'): ?>
                    <div class="detail-row">
                        <span>Upgrade to Prime Fit Plus</span>
                        <span>IDR 250,000.00/month</span>
                    </div>
                    <?php endif; ?>
                    <div class="detail-row">
                        <span>12 month</span>
                        <span>IDR 0.00/month</span>
                    </div>
                    <div class="detail-row">
                        <strong>Total monthly payment</strong>
                        <strong>IDR <?php echo number_format($formData['totalPrice'], 2); ?>/month</strong>
                    </div>

                </div>

                <!-- Payment Options -->
                <h2 class="mt-5 mb-4">PAYMENT</h2>
                <div class="row g-3 mb-4">
                    <div class="col-4">
                        <div class="payment-option active text-center">
                            <img src="/api/placeholder/50/30" alt="Card" class="mb-2">
                            <div>Card</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="payment-option text-center">
                            <img src="/api/placeholder/50/30" alt="Dana" class="mb-2">
                            <div>Dana</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="payment-option text-center">
                            <img src="/api/placeholder/50/30" alt="Bank" class="mb-2">
                            <div>Bank</div>
                        </div>
                    </div>
                </div>

                <!-- Card Payment Form -->
                <form action="process_payment.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Card number</label>
                        <input type="text" class="form-control" placeholder="1234 5678 9012 3456" required>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label class="form-label">Expiry</label>
                            <input type="text" class="form-control" placeholder="MM/YY" required>
                        </div>
                        <div class="col">
                            <label class="form-label">CVC</label>
                            <input type="text" class="form-control" placeholder="CVC" required>
                        </div>
                    </div>
                    <button type="submit" class="pay-button w-100" onclick=Alert()>PAY</button>
                    <script>
                        function Alert() {
                            alert("Payment Success!");
                        }
</script>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Payment option selection
        document.querySelectorAll('.payment-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.payment-option').forEach(opt => {
                    opt.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
</body>
</html> 