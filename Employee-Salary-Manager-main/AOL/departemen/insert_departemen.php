<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
    $namaDepartemen = $_POST['nama_departemen'];
    $kepalaDepartemen = $_POST['kepala_departemen'];

    $sql = "INSERT INTO DEPARTEMEN (Nama_departemen, Kepala_departemen) VALUES ('$namaDepartemen', '$kepalaDepartemen')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
