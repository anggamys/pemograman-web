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
            <h1>📘 Belajar PHP Modular</h1>
            <p>Silakan aktifkan bagian yang ingin diuji dengan uncomment salah satu baris berikut.</p>
        </header>

        <main>
            <?php
            // Uncomment one file at a time for testing
            // include './strukturphp.php';
            // include './variabel.php';
            // include './contohoperator.php';
            // include './percabanganif.php';
            // include './percabanganifelse.php';
            // include './switchcase.php';
            // include './perulanganfor.php';
            // include './perulanganforeach.php';
            // include './whiledowhile.php';
            // include './prosedur.php';
            include './fungsi.php';
            // include './fungsimatematik.php';
            // include './fungsiparams.php';
            // include './form/formget.php';
            // include './form/formpost.php';
            // include './contohscriptingelement.php';
            ?>
        </main>

        <footer>
            <p>&copy; <?= date("Y") ?> - Belajar PHP Dasar</p>
        </footer>
    </div>
</body>

</html>