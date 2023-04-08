<?php
require_once 'database_connection.php';
// Start a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page
    header('Location: login.html');
    exit;
}

// Include the logout script
//require_once 'logout.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<!-- Include your CSS and JavaScript files here -->
    <style>
        nav {
    background-color: #333;
    overflow: hidden;
}

nav ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

nav li {
    float: left;
}

nav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav li a:hover {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	<h1>Welcome to my website</h1>
	<!-- Add your content here -->
</body>
</html>
