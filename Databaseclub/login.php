<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: landing_page.html"); // Redirect to login page if the user is not logged in
        exit();
    }
    // Fetch user information (e.g., name) from your database based on the logged-in user
    $userFullName = "John Doe"; // Replace with the actual user's name
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pizza Club - User Dashboard</title>
</head>
<body>
    <header>
        <h1>Welcome to Pizza Club Online Ordering</h1>
        <p>Hello, <?php echo $userFullName; ?>! You are now logged in.</p>
    </header>
    <nav>
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="order_history.php">Order History</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <!-- Add user-specific content here -->
    </main>
    <footer>
        &copy; 2023 Pizza Club
    </footer>
</body>
</html>
