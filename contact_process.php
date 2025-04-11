<?php
// Enable error reporting (for debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "sql308.infinityfree.com";
$username = "if0_38644848";
$password = "sy09fJKyy0U"; // Default XAMPP password is empty
$database = "if0_38644848_student_hub_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values and sanitize input
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into contacts table
    $sql = "INSERT INTO contacts (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Show a JavaScript alert and redirect
        echo "<script>
                alert('Your message has been sent successfully!');
                window.location.href='index.php';
              </script>";
        exit(); // Stop script execution
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
