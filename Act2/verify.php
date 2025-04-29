<?php
require 'config.php';

// Pre-fill email if coming from sent_otp.php
$email = isset($_GET['email']) ? trim($_GET['email']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="html-form">
        <form action="verify_otp.php" method="POST">
            <h2>Verify Your OTP</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required readonly><br>
            <label for="email">OTP:</label>
            <input type="text" name="otp" placeholder="Enter 6-digit OTP" required><br>
            <button type="submit">Verify</button>
        </form>
    </div>
</body>
</html>