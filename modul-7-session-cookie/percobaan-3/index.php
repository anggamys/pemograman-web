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
        <a href="/">Home</a>
        <a href="/profil.php">Profil</a>
        <a href="/gallery.php">Galeri</a>
    </div>

    <div class="content">
        <div class="header">Home</div>
        <?php include "modul.php"; ?>
    </div>
</body>
</html>
