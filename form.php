<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form Page</title>
    <!-- Link to CSS code -->
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to the Application Form Page</h1>
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

    <h1>Application</h1>

    <?php
    // Path to the file where submitted applications are stored
    $filePath = "applications.txt";

    // Check if the form was submitted via the POST method
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Sanitize inputs to prevent XSS attacks
        $name = htmlspecialchars(string: $_POST['name']); // Sanitize the name field
        $email = htmlspecialchars(string: $_POST['email']); // Sanitize the email field
        $bio = htmlspecialchars(string: $_POST['bio']); // Sanitize the bio field
        $timestamp = date(format: "Y-m-d H:i:s"); // Generate the current timestamp (server time)

        // Check if all form fields are filled
        if (!empty($name) && !empty($email) && !empty($bio)) {
            // Format the data to save in the file
            $data = "$name,$email,$bio,$timestamp\n";

            // Append the formatted data to the file (with locking for safety)
            file_put_contents(filename: $filePath, data: $data, flags: FILE_APPEND | LOCK_EX);

            // Display a success message to the user
            echo "<p class='success'>Thank you, $name! Your application was submitted on $timestamp.</p>";
        } else {
            // Display an error message if any field is empty
            echo "<p class='error'>All fields are required. Please complete the form.</p>";
        }
    }
    ?>

    <!-- Application form for user input -->
    <form id="applicationForm" method="POST" action="">
        <!-- Input for the user's full name -->
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required> <!-- 'required' ensures the field is not left empty -->

        <!-- Input for the user's email -->
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required> <!-- 'required' ensures the field is not left empty -->

        <!-- Textarea for the user's bio -->
        <label for="bio">Tell us about yourself:</label>
        <textarea id="bio" name="bio" rows="5" required></textarea> <!-- 'required' ensures the field is not left empty -->

        <!-- Submit button to send the form data -->
        <button type="submit">Submit Application</button>
    </form>

    <h2>Submitted Applications</h2>
    <!-- List to display all submitted applications -->
    <ul id="applicationsList">
        <?php
        // Check if the file with submitted applications exists
        if (file_exists(filename: $filePath)) {
            // Read all lines from the file
            $lines = file(filename: $filePath, flags: FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            // Loop through each line and display the application details
            foreach ($lines as $line) {
                // Split the line into its components
                list($name, $email, $bio, $timestamp) = explode(separator: ",", string: $line);

                // Display the application details in a list item
                echo "<li><strong>$name</strong> ($email) applied on $timestamp.<br>Bio: $bio</li>";
            }
        } else {
            // Display a message if no applications are found
            echo "<li>No applications submitted yet.</li>";
        }
        ?>
    </ul>
    <!-- Link to JS code -->
    <script src="form.js"></script>
</body>
</html>