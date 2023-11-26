<?php
 include("config.php");
 session_start();
// Include necessary libraries for database connection and email sending
// Replace with your database and email configuration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Check if the email exists in the "transporteur" table
    // Replace with your database query
    $userExists = checkEmailExistsInDatabase($email,$db);

    if ($userExists) {
        // Generate a secure and unique token for password reset
        $token = generateSecureToken($email,$db);

        // Update the user's record in the database with the token
        // Replace with your database update query

        // Send an email with the reset password link
        $resetLink = "https://telemex.cm/password-forget-reset.php?token=" . urlencode($token)."&email=".$email;
        sendResetPasswordEmail($email, $resetLink);

        // Display a success message to the user
        echo "Password reset instructions have been sent to your email.";
    } else {
        // Email does not exist in the database
        echo "Email not found in our records.";
    }
}

function checkEmailExistsInDatabase($email,$conn) {
    // Replace with your database connection code
    // Prepare and execute a query to check if the email exists in the "transporteur" table
    $stmt = $conn->prepare("SELECT COUNT(*) FROM transporteur WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    // Return true if the email exists (count > 0), false otherwise
    return $count > 0;
}


function generateSecureToken($email, $conn) {
  
    // Prepare and execute a query to fetch the user's password from the "transporteur" table
    $stmt = $conn->prepare("SELECT password FROM transporteur WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($password);
    $stmt->fetch();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Check if a password was found
    if ($password) {
        // Encode the password to create a secure token
        // Encryption key (must be a valid key for the chosen encryption algorithm)
$encryptionKey = 'ThisIsYourEncryptionKey';

// Initialization vector (IV) for AES encryption (must be 16 bytes)
$iv = 'ThisIsYourIV1234';

// Encryption method and padding scheme
$encryptionMethod = 'AES-256-CBC';

// Encrypt the string
$token = openssl_encrypt($password, $encryptionMethod, $encryptionKey, 0, $iv);
        return $token;
    } else {
        // Handle the case where the email was not found in the database
        return false;
    }
}


function sendResetPasswordEmail($email, $resetLink) {
    // Define email subject and message
    $subject = "Password Reset";
    $message = "Hello,\n\nTo reset your password, click on the following link:\n\n$resetLink\n\nIf you didn't request a password reset, please ignore this email.";

    // Set additional headers
    $headers = "From: commercial@telemex.cm" . "\r\n" .
               "Reply-To: nnfranck78@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    $result = mail($email, $subject, $message, $headers);
 
    
    // Send email 
 
    mail($email,$subject, $message,"Content-type:text/html;charset=UTF-8");
 
    if ($result) {
        // Email sent successfully
        //echo "Password reset instructions have been sent to your email.";
        header("Location: password-forget.php?send=true");

    } 
    
    else {
        header("Location: password-forget.php");

    }
}

?>
