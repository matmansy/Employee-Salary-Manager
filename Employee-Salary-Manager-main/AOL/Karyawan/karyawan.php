<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
</head>
<body>

<h2>Tabel Karyawan</h2>

<?php
// Include the database connection file
include 'db_connect.php';
?>

<!-- CREATE operation form -->
<form method="POST" action="Karyawan/add_karyawan.php">
    <label>Nama:</label>
    <input type="text" name="nama" required>
    <label>Posisi:</label>
    <input type="text" name="posisi" required>
    <label>Kontak:</label>
    <input type="text" name="kontak" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Alamat:</label>
    <input type="text" name="alamat" required>
    <button type="submit" name="create">Insert Karyawan</button>
</form>

<!-- Display the table -->
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Posisi</th>
        <th>Kontak</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Actions</th>
    </tr>

    <?php
    // Fetch and display data from the KARYAWAN table
    $sql = "SELECT * FROM KARYAWAN";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ID_karyawan']}</td>
                    <td>{$row['Nama']}</td>
                    <td>{$row['Posisi']}</td>
                    <td>{$row['Kontak']}</td>
                    <td>{$row['Email']}</td>
                    <td>{$row['Alamat']}</td>
                    <td>
                        <form method='POST' action='Karyawan/update_karyawan.php'>
                            <input type='hidden' name='id_to_update' value='{$row['ID_karyawan']}'>
                            <input type='text' name='new_posisi' placeholder='New Position'>
                            <button type='submit' name='update'>Update</button>
                        </form>
                        <form method='POST' action='Karyawan/delete_karyawan.php'>
                            <input type='hidden' name='id_to_delete' value='{$row['ID_karyawan']}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='7'>0 results</td></tr>";
    }
    ?>
</table>

<?php
// Close the database connection
$conn->close();
?>

</body>
</html>
