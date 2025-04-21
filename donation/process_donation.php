<?php
session_start();  // ✅ Must come first!

$host = "localhost";
$dbname = "pet_adoption";
$username = "root";
$password = "Keerthi@18";
$port = 3307;

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = $conn->real_escape_string($_POST['donor_name']);
    $email   = $conn->real_escape_string($_POST['donor_email']);
    $amount  = (float)$_POST['donation_amount'];
    $message = $conn->real_escape_string($_POST['donor_message']);

    $sql = "INSERT INTO donations (name, email, amount, message, donated_at)
            VALUES ('$name', '$email', $amount, '$message', NOW())";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['donation_success'] = "Thank you, <strong>$name</strong>! Your donation of <strong>\$$amount</strong> has been recorded. 💖";
    } else {
        $_SESSION['donation_error'] = "Something went wrong. Please try again.";
    }

    $conn->close();

    // ✅ Ensure this file exists and is correctly named
    header("Location: donate.php");
    exit();
}
?>
