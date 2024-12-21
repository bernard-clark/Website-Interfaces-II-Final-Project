<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Page</title>
    <link rel="stylesheet" href="services.css">
</head>
<body>

<!-- Header Section -->
<header>
        <!-- Display a welcome message in the header -->
        <h1>Welcome to the Services Page</h1>
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

    <h1>Services</h1>

    <!-- Popup for showing service details -->
<div id="overlay"></div> <!-- Background overlay -->
<div id="popup">
    <h2 id="popup-title"></h2> <!-- Title of the selected service -->
    <p id="popup-description"></p> <!-- Detailed description of the selected service -->
    <h3>Schedule</h3> <!-- Section header for the schedule -->
    <ul id="popup-schedule"></ul> <!-- List container for schedule items -->
    <button onclick="closePopup()">Close</button> <!-- Button to close the popup -->
</div>

<?php
// Define an array containing the details of the services, including schedules
$services = [
    [
        "title" => "Orbital Tours", // Name of the service
        "description" => "Experience breathtaking views of Earth from orbit. Our state-of-the-art shuttles provide a comfortable and safe journey beyond the atmosphere.",
        "schedule" => [ // Schedule for Orbital Tours
            "Monday" => "10:00 AM - 4:00 PM",
            "Wednesday" => "12:00 PM - 6:00 PM",
            "Saturday" => "9:00 AM - 5:00 PM"
        ]
    ],
    [
        "title" => "Satellite Deployment", // Name of the service
        "description" => "Efficient and precise satellite deployment services for both commercial and scientific purposes. Our experts ensure smooth operations.",
        "schedule" => [ // Schedule for Satellite Deployment
            "Tuesday" => "8:00 AM - 2:00 PM",
            "Thursday" => "10:00 AM - 4:00 PM"
        ]
    ],
    [
        "title" => "Space Cargo Transport", // Name of the service
        "description" => "Secure transportation of goods to space stations or other orbital destinations. We handle fragile and sensitive equipment with care.",
        "schedule" => [ // Schedule for Space Cargo Transport
            "Monday" => "6:00 AM - 2:00 PM",
            "Friday" => "9:00 AM - 3:00 PM"
        ]
    ],
    [
        "title" => "Zero Gravity Experience", // Name of the service
        "description" => "Experience weightlessness aboard our specially designed shuttles. Perfect for training or recreational purposes.",
        "schedule" => [ // Schedule for Zero Gravity Experience
            "Saturday" => "11:00 AM - 7:00 PM",
            "Sunday" => "10:00 AM - 6:00 PM"
        ]
    ]
];

// Set the Content-Type header to inform the browser that the response is JSON
header(header: 'Content-Type: application/json');

// Convert the PHP array into a JSON string and output it
echo json_encode(value: $services);
?>

<script src="services.js"></script>
</body>
</html>