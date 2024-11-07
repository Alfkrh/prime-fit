<?php
session_start();

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
        'termsAccepted' => isset($_POST['termsAccepted']),
    ];

    // Basic validation
    $errors = [];
    if (empty($formData['firstName'])) $errors['firstName'] = 'First name is required.';
    if (empty($formData['lastName'])) $errors['lastName'] = 'Last name is required.';
    if (empty($formData['dateOfBirth'])) $errors['dateOfBirth'] = 'Date of birth is required.';
    if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Valid email is required.';
    if (empty($formData['phoneNumber'])) $errors['phoneNumber'] = 'Phone number is required.';
    if (!$formData['termsAccepted']) $errors['termsAccepted'] = 'You must accept the terms.';

    if (empty($errors)) {
        // Store data in session
        $_SESSION['formData'] = $formData;

        // Redirect to the review page
        header('Location:payment.php');
        exit;
    } else {
        // If there are errors, store them in the session and redirect back
        $_SESSION['errors'] = $errors;
        header('Location: registration.php');
        exit;
    }
}
?>
