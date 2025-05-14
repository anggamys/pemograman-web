<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: index.php");
    exit();
}

function loadModule($module)
{
    $module = basename($module);
    $modulePath = "modules/$module.php";

    if (file_exists($modulePath)) {
        include $modulePath;
    } else {
        echo "<h1>Modul tidak ditemukan</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syadmin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: 250px 1fr;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #444;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 8px;
            border-radius: 4px;
        }

        .sidebar ul li a:hover {
            background-color: #444;
        }

        .content {
            padding: 20px;
            background-color: #f4f4f4;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logout-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Syadmin Panel</h2>
        <ul>
            <li><a href="?module=dashboard">Dashboard</a></li>
            <li><a href="?module=users">Pengguna</a></li>
            <li><a href="?module=settings">Pengaturan</a></li>
            <li><a href="?module=reports">Laporan</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="header">
            <h2>Selamat datang, <?php echo htmlspecialchars(
                                    $_SESSION["username"]
                                ); ?></h2>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

        <div class="module-content">
            <?php if (isset($_GET["module"])) {
                loadModule($_GET["module"]);
            } else {
                loadModule("dashboard");
            } ?>
        </div>
    </div>
</body>

</html>