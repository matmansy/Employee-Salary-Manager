<?php
// Include the database connection file
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $idToDelete = $_POST['id_to_delete'];

    $sql = "DELETE FROM GAJI WHERE ID_karyawan='$idToDelete'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}



// Close the database connection
$conn->close();
?>