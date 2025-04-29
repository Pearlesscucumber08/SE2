<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="html-form">
        <form action="send_otp.php" method="POST">
            <h2>OTP Form</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Send OTP</button>
        </form>
    </div>
</body>
</html>