<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $idToUpdate = $_POST['id_to_update'];
    $newKepalaDepartemen = $_POST['new_kepala_departemen'];

    $sql = "UPDATE DEPARTEMEN SET Kepala_departemen='$newKepalaDepartemen' WHERE ID_departemen='$idToUpdate'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
