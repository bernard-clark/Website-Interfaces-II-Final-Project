<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Character encoding and viewport settings for responsive design -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Link to external CSS file for styling -->
  <link rel="stylesheet" href="contact.css">
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

  <!-- Main container for the contact form -->
  <div class="contact-container">
    <h1>Contact Us</h1>
    
    <!-- Display success or error messages after form submission -->
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($successMessage)): ?>
      <!-- Success message when the form is successfully submitted -->
      <div class="form-success"><?php echo htmlspecialchars($successMessage); ?></div>
    <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($errorMessage)): ?>
      <!-- Error message if something goes wrong (e.g., validation fails) -->
      <div class="form-error"><?php echo htmlspecialchars($errorMessage); ?></div>
    <?php endif; ?>

    <!-- Contact form -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <!-- Name field -->
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>
      </div>
      
      <!-- Email field -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
      </div>

      <!-- Message field -->
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
      </div>

      <!-- Submit button -->
      <button type="submit">Send</button>
    </form>

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script defer src="contact.js"></script>

</body>
</html>