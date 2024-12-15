<?php
// Include the database connection file
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];
    $email = $_POST['email'];
    $departemen = $_POST['departemen'];

    // Insert data into the ADMIN table
    $sql = "INSERT INTO ADMIN (Nama, Kontak, Email,ID_departemen) VALUES ('$nama', '$kontak', '$email', '$departemen')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>