<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <!-- Link to external CSS file for styling -->
    <link rel="stylesheet" href="about.css">
    
</head>
<body>
    <?php
    // Array to hold information about team members
    $teamMembers = [
        ["name" => "Bernard Clark", "role" => "Founder & Owner", "bio" => "Bernard is passionate about innovation, leads our tech team with expertise in AI, and connects us with our audience."],
    ];
    ?>

    <!-- Page header with main title -->
    <header class="header">
        <h1>About Us</h1>
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

    <!-- Main content area -->
    <main>
        <!-- Section for general information about the company -->
        <section class="about-section">
            <h1>Who We Are</h1>
            <p>Welcome to our company, <!--EXAMPLE NAME--><!--DOES NOT ACTUALLY EXIST-->Silver Emerald Technology! We are dedicated to providing the best services for our clients.</p>
        </section>

        <!-- Section showcasing the team members -->
        <section class="team-section">
            <h2>Meet Our Team</h2>
            <div class="team-grid">
                <?php
                // Loop through the team members array and create a card for each member
                foreach ($teamMembers as $member): ?>
                    <div class="team-card" onclick="showBio('<?php echo $member['bio']; ?>')">
                        <!-- Display the team member's name -->
                        <h3><?php echo $member['name']; ?></h3>
                        <!-- Display the team member's role -->
                        <p><?php echo $member['role']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <!-- Footer section with copyright information -->
    <footer class="footer">
        <p>&copy; <?php echo date(format: "Y"); ?> Our Company. All Rights Reserved.</p>
    </footer>

    <script src="about.js"></script>

</body>
</html>