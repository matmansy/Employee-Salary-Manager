<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
</head>
<body>

<!-- Menu for navigating to different pages --><div class="container">
    <aside class="sidebar">
        <!-- Sidebar content here -->
        <ul>
    <div class = "karyawan">
        <li><a href="?page=karyawan">Karyawan</a>
        </li>
    </div>
        <li><a href="?page=admin">Admin</a></li>
    <li><a href="?page=departemen">Departemen</a></li>
    <li><a href="?page=gaji">Gaji</a></li>
</ul>
    </aside>
    <div class="main-content">
        <header class="header">
            <div class="ESM">
                <h1>Employee Salary Manager</h1>
            </div>
            <!-- Header content here -->
        </header>
        <div class="content">
        <div>
    <?php
    // Include the database connection file
    include 'db_connect.php';

    // Check which page is selected, default to 'karyawan'
    $page = isset($_GET['page']) ? $_GET['page'] : 'karyawan';

    // Include the corresponding PHP file based on the selected page
    switch ($page) {
        case 'admin':
            include 'Admin\admin.php';
            break;
        case 'departemen':
            include 'departemen\departemen.php';
            break;
        case 'gaji':
            include 'gaji/gaji.php';
            break;
        default:
            // 'karyawan' is the default page
            include 'Karyawan\karyawan.php';
    }

    // Close the database connection
  
    ?>
</div>
            <!-- Main dashboard content here -->
        </div>
    </div>
</div>


</body>
</html>
