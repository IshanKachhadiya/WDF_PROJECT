<?php
// Simulate a user database (in real apps, use a database)
$valid_users = [
    "gamer123" => "pass123",
    "admin" => "admin123"
];

// Function to sanitize input
function sanitize_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Check if request is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize inputs
    $username = sanitize_input($_POST['username'] ?? '');
    $password = sanitize_input($_POST['password'] ?? '');

    // Check if username exists and password matches
    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        echo "<h2 style='color:green; text-align:center;'>✅ Login successful!</h2>";
        echo "<p style='text-align:center;'>Welcome, <strong>$username</strong> to GameHub Store!</p>";
    } else {
        echo "<h2 style='color:red; text-align:center;'>❌ Login failed</h2>";
        echo "<p style='text-align:center;'>Invalid username or password. Please try again.</p>";
    }
} else {
    echo "<h2 style='color:orange; text-align:center;'>🚫 Invalid access</h2>";
    echo "<p style='text-align:center;'>Please submit the form via the login page.</p>";
}
?>
