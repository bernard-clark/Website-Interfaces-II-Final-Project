<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- CSS for the login page -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <!-- Header Section -->
    <header>
        <!-- Display a welcome message in the header -->
        <h1>Welcome to the Login Page</h1>
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

        <!-- login.php -->
        <?php
        // Start session to manage user login state
        session_start();
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve username and password from POST request
            $username = $_POST['username'];
            $password = $_POST['password'];
            // Hardcoded credentials (replace with database validation in production)
            $validUsername = 'admin';
            $validPassword = 'password123';
            // Validate the provided credentials
            if ($username === $validUsername && $password === $validPassword) {
                // Successful login: save username in the session
                $_SESSION['username'] = $username;

                // Redirect to the dashboard or another page
                header(header: 'Location:home.php'); // Change 'dashboard.php' to the desired page
                exit; // Ensure no further code is executed after redirection
            } else {
                // Invalid login: set an error message to display
                $error = 'Invalid username or password.';
            }
        }
        ?>
        <!-- Display error message if login fails -->
        <?php if (!empty($error)) : ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <!-- Login form -->
        <form id="loginForm" action="login.php" method="POST">
            <!-- Username input field -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <!-- Password input field -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <!-- Submit button -->
            <button type="submit">Login</button>
            <!-- Placeholder for JavaScript error messages -->
            <p id="error-message" class="error"></p>
        </form>
    </div>
    <!-- JavaScript for the login page -->
    <script src="login.js"></script>
</body>
</html>