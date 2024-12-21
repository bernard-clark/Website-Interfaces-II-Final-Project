<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Page</title>
    <!-- CSS for Database -->
    <link rel="stylesheet" href="database.css">
</head>
<body>
    <div class="container">
    <!-- Header Section -->
    <header>
        <!-- Display a welcome message in the header -->
        <h1>Database Results</h1>
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
        <!-- Example button -->
        <button id="exampleButton">Click Me</button>

        <!-- Table to display database results -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database configuration variables
                $host = 'localhost'; // Hostname of the database server
                $dbname = 'MarsTours_db'; // Name of the database
                $username = 'bernard_clark'; // Username to connect to the database
                $password = 'MT_Shuttle57'; // Password for the database user

                try {
                    // Data Source Name (DSN) string for PDO connection
                    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

                    // Create a new PDO instance to connect to the database
                    $pdo = new PDO(dsn: $dsn, username: $username, password: $password);

                    // Set error mode to throw exceptions for easier debugging
                    $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

                    // SQL query to select all rows from the table
                    $sql = "SELECT * FROM your_table_name";

                    // Execute the query and get the result set
                    $stmt = $pdo->query($sql);

                    // Loop through each row in the result set and display it in the table
                    while ($row = $stmt->fetch(mode: PDO::FETCH_ASSOC)) {
                        // Each table row is dynamically generated from database data
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>"; // Display the ID column
                        echo "<td>{$row['name']}</td>"; // Display the Name column
                        echo "<td>{$row['email']}</td>"; // Display the Email column
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    // Display an error message in the table if the connection fails
                    echo "<tr><td colspan='3'>Error: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- JavaScript for Database -->
    <script src="database.js"></script>
</body>
</html>