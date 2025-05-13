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
        <a href="Halaman-utama.html">Home</a>
        <a href="Halaman-profil.html">Profil</a>
        <a href="Halaman-galeri.html">Gallery</a>
    </div>

    <div class="content">
        <?php include "./modul.php"; ?>
    </div>
</body>


</html>