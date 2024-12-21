<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- CSS for the clock -->
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- Display a welcome message in the header -->
        <h1>Welcome to the Home Page</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <!-- Add navigation links -->
        <a href="home.php">Home</a>
        <a href="form.php">Form</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="database.php">Database</a>
        <a href="login.php">Login</a>
    </nav>

    <!-- Main Content Section -->
    <main>
        <!-- Clock Container -->
        <div class="clock-container">
            <?php
                // Get the current time on the server
                // Format the time as HH:MM:SS (24-hour format)
                $currentTime = date(format: "HH:MM:SS");
            ?>
            <!-- Display the clock with an initial time from PHP -->
            <div class="clock" id="clock"><?php echo $currentTime; ?></div>
        </div>

        <!-- Placeholder Section for Additional Content -->
        <section>
            <!-- Add a sample heading and description -->
            <h2>About This Site</h2>
            <p>
                For information about this website, please visit the about page for more information.
            </p>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <!-- Display a copyright message with the current year -->
        <p>&copy; <?php echo date(format: "Y"); ?> My Website. All rights reserved.</p>
    </footer>

    <!-- JavaScript for the Clock -->
    <script src="home.js"></script>
</body>
</html>