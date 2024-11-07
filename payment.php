<?php
session_start();

// Redirect back to form if no data in session
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
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Layout */
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            background-color: #f5f5f5;
            padding: 40px;
        }

        .review-and-pay,
        .payment {
            padding: 20px;
        }

        /* Review and Pay Section */
        .review-and-pay {
            background-color: #fff;
            border-right: 1px solid #ddd;
        }

        .review-and-pay h2 {
            font-size: 18px;
            font-weight: 600;
            color: #2F4858;
            margin-bottom: 20px;
        }

        .review-and-pay .field {
            margin-bottom: 10px;
        }

        .review-and-pay .field label {
            font-size: 14px;
            color: #666;
            display: block;
            margin-bottom: 5px;
        }

        .review-and-pay .field span {
            font-size: 16px;
            color: #2F4858;
            font-weight: 500;
        }

        /* Payment Section */
        .payment {
            background-color: #fff;
        }

        .payment h2 {
            font-size: 18px;
            font-weight: 600;
            color: #2F4858;
            margin-bottom: 20px;
        }

        .payment-method {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .payment-method img {
            max-width: 30px;
        }

        .payment-method span {
            font-size: 16px;
            color: #2F4858;
            font-weight: 500;
        }

        .payment-details {
            margin-bottom: 20px;
        }

        .payment-details label {
            font-size: 14px;
            color: #666;
            display: block;
            margin-bottom: 5px;
        }

        .payment-details input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .pay-btn {
            background-color: #FF5722;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .review-and-pay {
                border-right: none;
                border-bottom: 1px solid #ddd;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="review-and-pay">
            <h2>REVIEW AND PAY</h2>
            <div class="field">
                <label>First name</label>
                <span><?php echo htmlspecialchars($formData['firstName']); ?></span>
            </div>
            <div class="field">
                <label>Last name</label>
                <span><?php echo htmlspecialchars($formData['lastName']); ?></span>
            </div>
            <div class="field">
                <label>Date of birth</label>
                <span><?php echo htmlspecialchars($formData['dateOfBirth']); ?></span>
            </div>
            <div class="field">
                <label>Email address</label>
                <span><?php echo htmlspecialchars($formData['email']); ?></span>
            </div>
            <div class="field">
                <label>Mobile phone number (eg: 08**********)</label>
                <span><?php echo htmlspecialchars($formData['phoneNumber']); ?></span>
            </div>
        </div>
        <div class="payment">
            <h2>PAYMENT</h2>
            <div class="payment-method">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAELUlEQVR4nO2bW2xTVRzHz+25t9A7pRYBbWAgAYGAQMBVEZDwgCgSJMoCgeQBRNFEjSIP4JMvRtETDQlJNEqAaEQRMRpBQJ4EAwgBgiAKSBQRHKjMwUBLd3vPzTM+nKXr7d5LS3vPGQbw9ylpR8/59fynpxJ6AKIIoggiiCCCCCKIIIIIIrIfLvwHMAcYB1QHr0qCAuAi0A6cBT4BXEG5QAZQAiwEaoFKQHaU3QFagcNAC3AQ+ADQgBmAASxyGK0GsAIlQXMIyFcBSJAKLAImAuuBnVFMg7QMMAfYDhjBoAoAE6X7gSVAY4zzHQj0BOMkPQDMAu4DesCOABUAVAHgBnAQKAKOBL2eBioAtQHVuB3Yj6qCFADagD6gANgPXAb+DOBaDHCjFgAHgUtAEXAQMALkZgKngKeBJTrUuoFa4GcUFgGxAC4BZcD3QDswnb5ZgAL8CHQD7wBKAGz7gAk4rQCuAWagAmRj7wiA9wL3AvOJDEAQK4AtKB5gOwPUAv0RwKUA2AMqAe+gg+8iMAY4jTMAC3APOojBDHCHToGLwFygB8gCcoL64Jz3AbOClkkF3hXglgDsQ7eXOIAQANVoTD4HmAjcBlQD04A7gUKgJOiaOAKpAtTF+Gw+8AaqHjGAFlQT+YF3gVlAG9AGDLIAuICqBP7EVKBo0LFQpQNQAuQBDShSE6GdgBOoiXKMdUAPwABQAjQDe4EXUQJFCrAB+A4NahpQCGQHFRKgQ3kL8AMwH81HS4G0QD4d2Ab8hEblj4EapD+lAO4DngMGoT+ARagYjQDcQC/QCBSjjyYBJQCBGgEUw6fAQrQGBKhAxQF7gdfQoGcA5ajqFQMgAUFM+EAl8BKaB/x4gKeAMmAl8AwKIFwAk1FbgyPAKuAVFK+4AAacwFPACuAq0ABUoDWicgA+pANt6GNAKToDhACuAJuBNejAKwQGAEwZwLNo1r0FHA2e7BI+AQ6gD8AEPA8UAw/QdwDzgACqLgAz6t34oETZZjQ6DPETaFLNQCuHEhAE0AkcA1rQiHFQYKyYAMaAZagAXQBOxPb6rgBOoYWugL5iFYhiAl4A3gFaI7gHA+gCtmMNwBq6BgQx4AQeA/YDgYjeiwGsoWtAEAMeYAMKDR8a4b1o6Jsw6ADIIHYA6sOvRiJ5CXAFfTgHUABMO1QQe4AN6Aq0A7OQ2Xsv0AUhALXAChTAgYjxAMto8qRrDKgyUTyCPBSoZQEzEbQPSMBOoAr4Cq1KDsBE7OlAHbAXaEfT/U7gUDQABXHIHFQBwUK5QAY6Ig+hOt2Dhpp+dAagANgRJDkEHAF+AC5j7TWBIQpwAE10Y3AKWGqr8nUcxIAOtC+s4CgQiO8OiZbMQI0AV1DC8L4Yri9CIVALVADjUAnAeKAfKIC+/3Ak0RRUAdUAqgFUAqgEUAn8BUNcFZsVxY3ZAAAAAElFTkSuQmCC" alt="Card">
                <span>Card</span>
            </div>
            <div class="payment-details">
                <label>Card number</label>
                <input type="text" value="1234 5678 9011">
            </div>
            <div class="payment-details">
                <label>Expiry</label>
                <input type="text" value="MM/YY">
            </div>
            <div class="payment-details">
                <label>CVC</label>
                <input type="text" value="CVC">
            </div>
            <button class="pay-btn">PAY</button>
        </div>
    </div>
</body>
</html>