<?php
// Database connection
$servername = "localhost";  // Change this to your DB server if it's different
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "event_registration";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize user inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $event = htmlspecialchars($_POST['event']);

    // Generate the next registration number
    $sql = "SELECT registration_number FROM registrations ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $last_reg_num = $result->fetch_assoc()['registration_number'];
        $numeric_part = (int) substr($last_reg_num, 2);
        $new_reg_num = 'AP' . str_pad($numeric_part + 1, 5, '0', STR_PAD_LEFT);
    } else {
        $new_reg_num = 'AP10000';  // Starting point if no registrations yet
    }

    // Insert registration data into the database
    $sql = "INSERT INTO registrations (full_name, email, phone, event, registration_number) 
            VALUES ('$name', '$email', '$phone', '$event', '$new_reg_num')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to success page with the registration number
        header("Location: success.php?regnum=$new_reg_num");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
