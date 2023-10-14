<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
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
    <h2>Form Login</h2>
    <form method="post" action="login.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Create a MySQL connection (modify these credentials)
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $database = "perpus";

        $conn = new mysqli($servername, $db_username, $db_password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare a SQL statement to retrieve user data
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            // Verify the password (you should use password_hash() when storing passwords)
            if (password_verify($password, $row["password"])) {
                echo "<script>alert('Selamat datang!')</script>";
                echo "<script>window.location.href = 'halaman_utama.php';</script>";
            } else {
                echo "<script>alert('Username atau password Anda salah.')</script>";
            }
        } else {
            echo "<script>alert('Username atau password Anda salah.')</script>";
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>
