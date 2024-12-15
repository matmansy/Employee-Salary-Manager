<?php
// Include the database connection file
include 'db_connect.php';

// Check if the form is submitted for deleting
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Retrieve form data
    $idToDelete = $_POST['id_to_delete'];

    // Delete data from the KARYAWAN table
    $sql = "DELETE FROM KARYAWAN WHERE ID_karyawan='$idToDelete'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
