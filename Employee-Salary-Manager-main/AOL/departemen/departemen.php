<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard - Departemen</title>
</head>
<body>

<h2>Table Departemen</h2>

<?php
// Include the database connection file
include 'db_connect.php';
?>

<!-- CREATE operation form -->
<form method="POST" action="departemen/insert_departemen.php">
    <label>Nama Departemen:</label>
    <input type="text" name="nama_departemen" required>
    <label>Kepala Departemen:</label>
    <input type="text" name="kepala_departemen" required>
    <button type="submit" name="insert">Insert Departemen</button>
</form>

<!-- Display the table -->
<table>
    <tr>
        <th>ID Departemen</th>
        <th>Nama Departemen</th>
        <th>Kepala Departemen</th>
        <th>Actions</th>
    </tr>

    <?php
    // Fetch and display data from the DEPARTEMEN table
    $sql = "SELECT * FROM DEPARTEMEN";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ID_departemen']}</td>
                    <td>{$row['Nama_departemen']}</td>
                    <td>{$row['Kepala_departemen']}</td>
                    <td>
                        <form method='POST' action='departemen/update_departemen.php'>
                            <input type='hidden' name='id_to_update' value='{$row['ID_departemen']}'>
                            <input type='text' name='new_kepala_departemen' placeholder='New Head'>
                            <button type='submit' name='update'>Update</button>
                        </form>
                        <form method='POST' action='departemen/delete_departemen.php'>
                            <input type='hidden' name='id_to_delete' value='{$row['ID_departemen']}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 results</td></tr>";
    }
    ?>
</table>

<?php
// Close the database connection
$conn->close();
?>

</body>
</html>
