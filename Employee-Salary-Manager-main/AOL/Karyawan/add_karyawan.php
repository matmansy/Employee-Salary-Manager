<?php
// Include the database connection file
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    // Retrieve form data
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $kontak = $_POST['kontak'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // Insert data into the KARYAWAN table
    $sql = "INSERT INTO KARYAWAN (Nama, Posisi, Kontak, Email, Alamat) VALUES ('$nama', '$posisi', '$kontak', '$email', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
