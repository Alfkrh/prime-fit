<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

// Process and validate form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = [
        'firstName' => sanitizeInput($_POST['firstName']),
        'lastName' => sanitizeInput($_POST['lastName']),
        'dateOfBirth' => sanitizeInput($_POST['dateOfBirth']),
        'email' => sanitizeInput($_POST['email']),
        'phoneNumber' => sanitizeInput($_POST['phoneNumber']),
        'clubChoice' => sanitizeInput($_POST['clubChoice']),
        'accessLevel' => sanitizeInput($_POST['accessLevel']),
        'startingDate' => sanitizeInput($_POST['startingDate']),
        'bodyFirst1' => isset($_POST['bodyFirst1']),
        'bodyFirst2' => isset($_POST['bodyFirst2']),
        'bodyFirst3' => isset($_POST['bodyFirst3']),
        'termsAccepted' => isset($_POST['terms']),
        'healthAccepted' => isset($_POST['health']),
        'offersAccepted' => isset($_POST['offers'])
    ];

    $errors = [];
    
    // Validation logic
    if (empty($formData['firstName'])) {
        $errors[] = "First name is required";
    }
    
    if (empty($formData['lastName'])) {
        $errors[] = "Last name is required";
    }
    
    if (empty($formData['dateOfBirth'])) {
        $errors[] = "Date of birth is required";
    }
    
    if (empty($formData['email'])) {
        $errors[] = "Email is required";
    } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($formData['phoneNumber'])) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match("/^[0-9]{10,12}$/", $formData['phoneNumber'])) {
        $errors[] = "Invalid phone number format";
    }
    
    if (empty($formData['clubChoice']) || $formData['clubChoice'] === 'Club of Choice') {
        $errors[] = "Please select a club";
    }
    
    if (empty($formData['accessLevel']) || $formData['accessLevel'] === 'Access Level') {
        $errors[] = "Please select an access level";
    }
    
    if (empty($formData['startingDate'])) {
        $errors[] = "Starting date is required";
    }
    
    if (!$formData['termsAccepted']) {
        $errors[] = "You must accept the Terms and Conditions";
    }
    
    if (!$formData['healthAccepted']) {
        $errors[] = "You must accept the Health Statement";
    }

    $totalPrice = 130000;
    if ($formData['bodyFirst1']) $totalPrice += 100000;
    if ($formData['bodyFirst2']) $totalPrice += 150000;
    if ($formData['bodyFirst3']) $totalPrice += 200000;
    if ($formData['accessLevel'] === 'Upgrade to Prime Fit Plus + IDR 250,000.00/month') {
        $totalPrice += 250000;
    }
    $formData['totalPrice'] = $totalPrice;

    if (empty($errors)) {
        $_SESSION['formData'] = $formData;
        $_SESSION['registrationTime'] = time();
        header('Location: pay.php');
        exit;
    } else {
        $_SESSION['errors'] = $errors;
        $_SESSION['formData'] = $formData;
        header('Location: registration.php');
        exit;
    }
}

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}

if (isset($_SESSION['formData'])) {
    $formData = $_SESSION['formData'];
    unset($_SESSION['formData']);
}
?>