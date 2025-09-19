<?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$dbname = "mojedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Připojení selhalo: " . $conn->connect_error);
}

$jmeno = $_POST['jmeno'];
$email = $_POST['email'];
$barva = $_POST['barva'];

$sql = "INSERT INTO uzivatele (jmeno, email, barva) VALUES ('$jmeno', '$email', '$barva')";

if ($conn->query($sql) === TRUE) {
  echo "<p>✅ Data byla uložena. <a href='form.html'>Zpět na formulář</a></p>";
} else {
  echo "❌ Chyba: " . $conn->error;
}

$conn->close();
?>
