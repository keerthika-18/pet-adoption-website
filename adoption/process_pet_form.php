<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default user for XAMPP or MySQL Workbench
$password = "Keerthi@18"; // Your MySQL password
$dbname = "pet_adoption";
$port = 3307; // Change if you’re using a different port

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get the form data
$pet_name = $_POST['pet_name'];
$color = $_POST['color'];
$appearance = $_POST['appearance'];
$breed = $_POST['breed'];
$diet = $_POST['diet'];

// Insert data into the database
$sql = "INSERT INTO pets (pet_name, color, appearance, breed, diet)
        VALUES ('$pet_name', '$color', '$appearance', '$breed', '$diet')";

if ($conn->query($sql) === TRUE) {
    echo "New pet details entered successfully!";
    // Redirect to another page (optional)
    header("Location: pet_list.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
