<!DOCTYPE html>
<html>

<head>
    <title>Website Modular</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .menu {
            width: 150px;
            float: left;
            background-color: #f1f1f1;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .menu a {
            display: block;
            color: blue;
            text-decoration: none;
            margin-bottom: 5px;
        }

        .menu a:hover {
            text-decoration: underline;
        }

        .content {
            margin-left: 180px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="menu">
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=profil">Profil</a>
        <a href="index.php?page=galeri">Gallery</a>
    </div>

    <div class="content">
        <div class="header">
            <?php
            $halaman = isset($_GET['page']) ? $_GET['page'] : 'home';
            echo "<h1>" . ucfirst($halaman) . "</h1>";
            ?>
        </div>

        <?php include "./modul.php"; ?>
    </div>
</body>


</html>