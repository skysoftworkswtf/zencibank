<?php
// Fetch amount from query parameter
$amount = isset($_GET['amount']) ? $_GET['amount'] : null;

// Basic validation
if ($amount === null || !is_numeric($amount) || $amount <= 0) {
    header('Location: /error.html'); // Redirect to an error page
    exit();
}

// Redirect to the payment page with the amount as a query parameter
header("Location: /payment-page.html?amount=" . urlencode($amount));
exit();
