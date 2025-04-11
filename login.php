<?php
session_start();
$host = "sql308.infinityfree.com";
$port = 3306; // MySQL running on 3306
$dbname = "if0_38644848_student_hub_db";
$username = "if0_38644848";  // Change if using a different user
$password = "sy09fJKyy0U";      // Change if password is set

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $user, $user);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($pass, $hashed_password)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;  // Store username in session
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }

    $stmt->close();
}
$conn->close();
?>
