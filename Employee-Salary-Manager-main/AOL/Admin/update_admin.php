<?php
// Include the database connection file
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $idToUpdate = $_POST['id_to_update'];
    $newAdminName = $_POST['new_admin_name'];

    // Update data in the ADMIN table
    $sql = "UPDATE ADMIN SET Nama='$newAdminName' WHERE ID_admin='$idToUpdate'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>