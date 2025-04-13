<?php
$servername = "localhost";
$username = "root";
$password = "Keerthi@18";
$dbname = "pet_adoption";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pet_preference = $_POST['pet_preference'];
$reason = $_POST['reason'];
$experience = $_POST['experience'];

$sql = "INSERT INTO adoption_applications (name, email, phone, address, pet_preference, reason, experience)
        VALUES ('$name', '$email', '$phone', '$address', '$pet_preference', '$reason', '$experience')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Application submitted successfully!'); window.location.href = 'adoption_form.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
