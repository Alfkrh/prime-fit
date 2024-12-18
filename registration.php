<?php if (isset($errors) && !empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Profile - Gym Registration</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #f8f9fa;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .hero-image {
            height: 100%;
            object-fit: cover;
        }
        
        .price {
            color: #ff5722;
            font-weight: bold;
            float: right;
        }
        
        .form-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .add-ons {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        /* Style untuk input date */
        input[type="date"]::-webkit-calendar-picker-indicator {
            opacity: 1;
        }
        
        input[type="date"]::-webkit-inner-spin-button {
            display: none;
        }
        
        /* Style untuk placeholder pada input date */
        input[type="text"].date-input:not(:focus):before {
            content: attr(placeholder);
            position: absolute;
            color: #6c757d;
        }

        .submit-btn {
            background-color: #ff5722 !important;
            border: none;
        }

        .submit-btn:hover {
            background-color: #f4511e !important;
        }

        .plan-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Left side - Image -->
            <div class="col-md-5 position-relative">
                <button class="back-button" onclick="window.location.href='home.php'">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <img src="img/registration_thumbnail.png" alt="Gym workout" class="hero-image w-100">
            </div>
            
            <!-- Right side - Form -->
            <div class="col-md-7 p-4">
                <div class="form-container">
                    <h2 class="mb-4">CREATE YOUR PROFILE</h2>
                    
                    <form action="config.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First name" name="firstName">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Last name" name="lastName">
                        </div>
                        <div class="mb-3">
                            <div class="position-relative">
                                <input type="text" 
                                       class="form-control date-input" 
                                       placeholder="Date of birth"
                                       onfocus="(this.type='date')"
                                       onblur="if(!this.value)this.type='text'"
                                       name="dateOfBirth">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email address" name="email">
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text">+62</span>
                            <input type="tel" class="form-control" placeholder="Mobile phone number ( eg: 08********* )" name="phoneNumber">
                        </div>

                        <h2 class="mt-5 mb-4">CUSTOMIZE YOUR PLAN</h2>
                        
                        <div class="mb-4">
                            <div class="plan-header">
                                <h5 class="m-0">@PRIME FIT</h5>
                                <h5 class="m-0 price">IDR 130,000.00/Month</h5>
                            </div>
                            <small class="text-muted">Full gym fitness access that includes cardio, free weights, functional and lounge areas with usage of various fitness equipment.</small>
                            <small class="d-block text-muted">*The availability of certain facilities and equipment may vary depending on the club selected.</small>
                        </div>

                        <div class="mb-3">
                            <select class="form-select" name="clubChoice">
                                <option selected disabled>Club of Choice</option>
                                <option>Cibubur</option>
                                <option>Margonda</option>
                                <option>Cibinong</option>
                                <option>Cileungsi</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <select class="form-select" name="accessLevel">
                                <option selected disabled>Access Level</option>
                                <option>Reguler</option>
                                <option>Upgrade to Prime Fit Plus + IDR 250,000.00/month</option>
                            </select>
                        </div>

                        <div class="add-ons">
                            <h3 class="mb-3">SELECT ADD-ONS</h3>
                            <div class="mb-2">
                                <div class="form-check d-flex justify-content-between align-items-center">
                                    <div>
                                        <input type="checkbox" class="form-check-input" id="bodyFirst1" name="bodyFirst1">
                                        <label class="form-check-label" for="bodyFirst1">Body First 1</label>
                                    </div>
                                    <span>IDR 100,000.00</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-check d-flex justify-content-between align-items-center">
                                    <div>
                                        <input type="checkbox" class="form-check-input" id="bodyFirst2" name="bodyFirst2" checked>
                                        <label class="form-check-label" for="bodyFirst2">Body First 2</label>
                                    </div>
                                    <span>IDR 150,000.00</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-check d-flex justify-content-between align-items-center">
                                    <div>
                                        <input type="checkbox" class="form-check-input" id="bodyFirst3" name="bodyFirst3">
                                        <label class="form-check-label" for="bodyFirst3">Body First 3</label>
                                    </div>
                                    <span>IDR 200,000.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="position-relative">
                                <input type="text" 
                                       class="form-control date-input" 
                                       placeholder="Starting date"
                                       onfocus="(this.type='date')"
                                       onblur="if(!this.value)this.type='text'"
                                       value="2024-10-23"
                                       name="startingDate">
                            </div>
                            <small class="text-muted">*You can cancel your membership during the first 14 days of registration. Terms and conditions apply</small>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terms" name="terms">
                                <label class="form-check-label" for="terms">
                                    I agree to the Membership Terms and Conditions, Privacy Policy, Club Rules & Terms of Use
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="health" name="health">
                                <label class="form-check-label" for="health">
                                    I have read and agree to the Health Statement
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="offers" name="offers">
                                <label class="form-check-label" for="offers">
                                    I would like to receive offers from Evolution Wellness Indonesia and its partners
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger w-100 submit-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>