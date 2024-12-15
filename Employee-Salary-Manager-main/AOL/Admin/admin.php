<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
</head>
<body>

<h2>Tabel Admin</h2>

<!-- Form for inserting new Admin data -->
<form method="POST" action="Admin/insert_admin.php">
    <label>Nama:</label>
    <input type="text" name="nama" required>
    <label>Kontak:</label>
    <input type="text" name="kontak" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>ID Departemen:</label>
    <input type="text" name="departemen" required>
    <button type="submit" name="insert">Insert Admin</button>
</form>

<table>
    <tr>
        <th>ID Admin</th>
        <th>Nama</th>
        <th>Kontak</th>
        <th>Email</th>
        <th>Departemen</th>
        <th>Actions</th>
    </tr>

    <?php
    // Fetch and display data from the ADMIN table
    include 'db_connect.php';
    $sql = "SELECT * FROM ADMIN";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ID_admin']}</td>
                    <td>{$row['Nama']}</td>
                    <td>{$row['Kontak']}</td>
                    <td>{$row['Email']}</td>
                    <td>{$row['ID_departemen']}</td>
                    <td>
                        <form method='POST' action=' Admin/update_admin.php'>
                            <input type='hidden' name='id_to_update' value='{$row['ID_admin']}'>
                            <input type='text' name='new_admin_name' placeholder='New Name'>
                            <button type='submit' name='update'>Update</button>
                        </form>
                        <form method='POST' action=' Admin/delete_admin.php'>
                            <input type='hidden' name='id_to_delete' value='{$row['ID_admin']}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>0 results</td></tr>";
    }
    ?>
</table>
</body>
</html>
