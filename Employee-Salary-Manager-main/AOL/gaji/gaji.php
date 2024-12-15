<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <link rel="stylesheet" href="table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
</head>
<body>

<h2>Tabel gaji </h2>

<!-- Form for inserting new Gaji data -->
<form method="POST" action="gaji/insert_gaji.php">
    <label>ID Karyawan:</label>
    <input type="text" name="id_karyawan" required>
    <label>Gaji Pokok:</label>
    <input type="text" name="gaji_pokok" required>
    <label>Bonus:</label>
    <input type="text" name="bonus" required>
    <label>Potongan:</label>
    <input type="text" name="potongan" required>
    <button type="submit" name="insert">Insert Gaji</button>
</form>

<table>
    <tr>
        <th>ID Karyawan</th>
        <th>Gaji Pokok</th>
        <th>Bonus</th>
        <th>Potongan</th>
        <th>Actions</th>
    </tr>

    <?php
    // Fetch and display data from the GAJI table
    include 'db_connect.php';
    $sql = "SELECT * FROM GAJI";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ID_karyawan']}</td>
                    <td>{$row['Gaji_pokok']}</td>
                    <td>{$row['Bonus']}</td>
                    <td>{$row['Potongan']}</td>
                    <td>
                        <form method='POST' action='gaji/update_gaji.php'>
                            <input type='hidden' name='id_to_update' value='{$row['ID_karyawan']}'>
                            <input type='text' name='new_gaji_pokok' placeholder='New Gaji Pokok'>
                            <button type='submit' name='update'>Update</button>
                        </form>
                        <form method='POST' action='gaji/delete_gaji.php'>
                            <input type='hidden' name='id_to_delete' value='{$row['ID_karyawan']}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>0 results</td></tr>";
    }
    ?>
</table>

</body>
</html>
