<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Belajar PHP</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>📘 Belajar PHP Include, Require, Object Oriented, dan Database</h1>
            <p>Silakan aktifkan bagian yang ingin diuji dengan uncomment salah satu baris berikut.</p>
        </header>

        <main>
            <?php
            // Uncomment one file at a time for testing
            include "./panggilincreq.php";
            ?>
        </main>

        <footer>
            <p>&copy; <?= date("Y") ?> - Belajar PHP Dasar</p>
        </footer>
    </div>
</body>

</html>