<?php
// Include the database connection file
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
    // Retrieve form data
    $id_karyawan = $_POST['id_karyawan'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $bonus = $_POST['bonus'];
    $potongan = $_POST['potongan'];

    // Insert data into the GAJI table
    $sql = "INSERT INTO GAJI (ID_karyawan, Gaji_pokok, Bonus, Potongan) VALUES ('$id_karyawan', '$gaji_pokok', '$bonus', '$potongan')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
