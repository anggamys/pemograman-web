<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 400px;
            border: 1px dotted #aaa;
            padding: 20px;
            margin: 20px auto;
        }
        label {
            display: inline-block;
            width: 50px;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="url"],
        textarea {
            width: 300px;
            padding: 5px;
            margin-bottom: 10px;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        .button-group {
            text-align: center;
        }
        .button-group input {
            width: 80px;
            margin: 5px;
        }
    </style>
</head>
<body>
<div class="form-container">
    <form action="aksi.php" method="post">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="web">Web</label>
            <input type="url" name="web" id="web">
        </div>
        <div>
            <label for="alamat">Alamat</label><br>
            <textarea name="alamat" id="alamat"></textarea>
        </div>
        <div class="button-group">
            <input type="submit" value="Simpan">
            <input type="reset" value="Reset">
        </div>
    </form>
</div>
</body>
</html>
