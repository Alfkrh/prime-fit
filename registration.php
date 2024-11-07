<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #f5f5f5;
        }

        .back-button {
            position: fixed;
            top: 0;
            left: 0;
            background: #FF5722;
            border: none;
            padding: 15px;
            cursor: pointer;
            z-index: 100;
        }

        .back-button img {
            width: 24px;
            height: 24px;
            filter: invert(1);
        }

        .container {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        .image-section {
            flex: 0 0 40%;
            position: relative;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
                        url('images/registration_thumbnail.png');
            background-size: cover;
            background-position: center;
            top: 0;
        }

        .form-section {
            flex: 0 0 60%;
            padding: 40px 60px;
            background: white;
            overflow-y: auto;
        }

        .progress-steps {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .step-number {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #FF5722;
            color: white;
            font-size: 14px;
        }

        .step.inactive .step-number {
            background: #ccc;
        }

        .step-text {
            font-weight: 500;
            color: #333;
        }

        h1 {
            color: #2F4858;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input:not([type="checkbox"]), 
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .phone-input {
            display: flex;
            gap: 10px;
        }

        .phone-input select {
            width: 100px;
        }

        .plan-section {
            margin-top: 40px;
        }

        .plan-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .plan-name {
            font-size: 18px;
            font-weight: 500;
            color: #2F4858;
        }

        .plan-price {
            color: #FF5722;
            font-weight: bold;
        }

        .plan-description {
            color: #666;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .add-ons {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 4px;
            margin: 20px 0;
        }

        .add-ons h3 {
            color: #2F4858;
            margin-bottom: 15px;
        }

        .add-on-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .date-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 20px 0;
        }

        .date-field label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-size: 14px;
        }

        .checkbox-group {
            margin: 30px 0;
        }

        .checkbox-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 12px;
        }

        .checkbox-item input[type="checkbox"] {
            margin-top: 3px;
        }

        .checkbox-item label {
            font-size: 14px;
            color: #333;
        }

        .payment-summary {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #2F4858;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .payment-info {
            flex: 1;
        }

        .payment-label {
            font-size: 14px;
            opacity: 0.9;
        }

        .payment-amount {
            font-size: 20px;
            font-weight: 500;
        }

        .payment-period {
            font-size: 12px;
            opacity: 0.8;
        }

        .total-section {
            text-align: center;
            margin: 0 40px;
        }

        .continue-btn,
        .show-summary-btn {
            background: #FF5722;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 16px;
        }

        @media (max-width: 1024px) {
            .container {
                flex-direction: column;
            }

            .image-section {
                height: 300px;
            }

            .form-section {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <a href="home.php">
        <button class="back-button">  
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPjxsaW5lIHgxPSIxOSIgeTE9IjEyIiB4Mj0iNSIgeTI9IjEyIj48L2xpbmU+PHBvbHlsaW5lIHBvaW50cz0iMTIgMTkgNSAxMiAxMiA1Ij48L3BvbHlsaW5lPjwvc3ZnPg==" alt="Back">
        </button>
    </a>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
            <div class="progress-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-text">REGISTRATION</div>
                </div>
                <div class="step inactive">
                    <div class="step-number">2</div>
                    <div class="step-text">PAYMENT</div>
                </div>
            </div>

            <h1>CREATE YOUR PROFILE</h1>
            
            <form action="config.php" method="POST">
                <input type="text" placeholder="firstName" name="firstName">
                <input type="text" placeholder="lastName" name="lastName">
                <input type="date" placeholder="dateOfBirth" name="dateOfBirth">
                <input type="email" placeholder="email" name="email">
                
                <div class="phone-input">
                    <select>
                        <option>+62</option>
                    </select>
                    <input type="tel" name="phoneNumber" placeholder="Mobile phone number ( eg: 08********** )">
                </div>

                <div class="plan-section">
                    <h2>CUSTOMIZE YOUR PLAN</h2>
                    <div class="plan-header">
                        <div class="plan-name">@PRIME FIT</div>
                        <div class="plan-price">IDR 130,000.00/Month</div>
                    </div>
                    <p class="plan-description">Full gym floor access that includes cardio, free weights, functional and lounge areas with usage of various fitness equipment.<br>*The availability of certain facilities and equipment may vary depending on the club selected.</p>

                    <select>
                        <option>Club of Choice</option>
                    </select>
                    
                    <select>
                        <option>Access Level</option>
                        <option>Upgrade to Prime Fit Plus +IDR 250,000.00/month</option>
                    </select>

                    <div class="add-ons">
                        <h3>SELECT ADD-ONS</h3>
                        <div class="add-on-item">
                            <label>
                                <input type="checkbox"> Body First 1
                            </label>
                            <span>IDR 100,000.00</span>
                        </div>
                        <div class="add-on-item">
                            <label>
                                <input type="checkbox" checked> Body First 2
                            </label>
                            <span>IDR 150,000.00</span>
                        </div>
                        <div class="add-on-item">
                            <label>
                                <input type="checkbox"> Body First 3
                            </label>
                            <span>IDR 200,000.00</span>
                        </div>
                    </div>

                    <div class="date-section">
                        <div class="date-field">
                            <label>Starting date *</label>
                            <input type="text" value="23 October 2024" readonly>
                        </div>
                        <div class="date-field">
                            <label>Duration</label>
                            <input type="text" value="12 Month" readonly>
                        </div>
                    </div>

                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="terms" name="termsAccepted">
                            <label for="terms">I agree to the Membership Terms and Conditions, Privacy Policy, Club Rules & Terms of Use</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="health">
                            <label for="health">I have read and agree to the Health Statement</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="offers">
                            <label for="offers">I would like to receive offers from Evolution Wellness Indonesia and its partners</label>
                        </div>
                    </div>
                    
                    <button type="submit" class="continue-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="payment-summary">
        <div class="payment-info">
            <div class="payment-label">Monthly payment</div>
            <div class="payment-amount">IDR 380,000.00</div>
            <div class="payment-period">/month</div>
        </div>
        <div class="total-section">
            <div class="payment-label">Total payment</div>
            <div class="payment-amount">IDR 530,000.00</div>
        </div>
        <button class="show-summary-btn">Show summary</button>
    </div>
</body>
</html>