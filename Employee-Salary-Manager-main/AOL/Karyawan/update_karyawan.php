<?php
// Include the database connection file
include 'db_connect.php';

// Check if the form is submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Retrieve form data
    $idToUpdate = $_POST['id_to_update'];
    $newPosisi = $_POST['new_posisi'];

    // Update data in the KARYAWAN table
    $sql = "UPDATE KARYAWAN SET Posisi='$newPosisi' WHERE ID_karyawan='$idToUpdate'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
