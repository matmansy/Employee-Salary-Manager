<?php
// Include the database connection file
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $idToUpdate = $_POST['id_to_update'];
    $newGajiPokok = $_POST['new_gaji_pokok'];

    $sql = "UPDATE GAJI SET Gaji_pokok='$newGajiPokok' WHERE ID_karyawan='$idToUpdate'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


// Close the database connection
$conn->close();
?>