<!DOCTYPE html>
<html>
<head>
    <title>Form Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <h2>Form Register</h2>
    <form method="post" action="register.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Register">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Database connection parameters
        $hostname = "localhost";
        $username_db = "root";
        $password_db = "";
        $dbname = "perpus";

        // Create a database connection
        $conn = new mysqli($hostname, $username_db, $password_db, $dbname);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Perform your database operations here, e.g., inserting user data into a table

        // Display success message
        echo "<script>alert('Registration successful!')</script>";
        echo "<script>window.location.href = 'login.php';</script>";

        // Close the database connection
        $conn->close();
    }
    ?>

</body>
</html>
