<?php
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
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $email, $pass);

    if ($stmt->execute()) {
        // Redirect to index.php after successful registration
        echo "<script>
        alert('Registration successful! click ok to redirect to home page');
        window.location.href = 'index.php';
    </script>";
    
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
