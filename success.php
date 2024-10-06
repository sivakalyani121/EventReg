<?php
// Check if the registration number is passed in the URL and sanitize it
$regnum = isset($_GET['regnum']) ? htmlspecialchars($_GET['regnum'], ENT_QUOTES, 'UTF-8') : 'N/A';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link rel="stylesheet" href="css/success-page.css">
</head>
<body>

<div class="success-container">
    <div class="success-message">
        <h2>Registration Successful!</h2>
        <p>Thank you for registering for the event.</p>
        <p>Your registration number is: <span id="reg-number"><?php echo $regnum; ?></span></p>
        <div class="button-container">
            <button id="another-event-btn">Register for Another Event</button>
        </div>
    </div>
</div>

<script>
// Add event listener for the "Yes" button
document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('another-event-btn').addEventListener('click', () => {
        window.location.href = 'register.html'; // Redirect to register.html
    });
});
</script>

</body>
</html>
