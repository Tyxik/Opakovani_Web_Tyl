<?php
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$dbname = "uzivatele"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}

$jmeno = $_POST['jmeno'];
$email = $_POST['email'];
$barva = $_POST['misto'];

$sql = "INSERT INTO uzivatele (jmeno, email, barva) VALUES ('$jmeno', '$email', '$barva')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
    exit();
} else {
    echo "Chyba: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>