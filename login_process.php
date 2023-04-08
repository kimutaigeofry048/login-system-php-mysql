<?php
// Start a session
session_start();

// Include the database connection file
require_once 'database_connection.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a SQL statement to retrieve user data
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameters to the statement
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result set
    $result = mysqli_stmt_get_result($stmt);

    // Check if a user was found with the given credentials
    if ($row = mysqli_fetch_assoc($result)) {
        // Store the user ID in a session variable
        $_SESSION['user_id'] = $row['user_id'];

        // Redirect to the index page
        header('Location: index.php');
        exit;
    } else {
        // Show an error message
        echo "Invalid username or password";
    }
}

// Rest of your login form HTML code goes here
?>
