<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .upload-container {
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .upload-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .file-input {
            display: block;
            margin: 0 auto 20px;
        }

        .upload-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .upload-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="upload-container">
    <h2>Upload a File</h2>
    <form action="uploadfile.php" method="post" enctype="multipart/form-data">
        <input class="file-input" type="file" name="fileToUpload" id="fileToUpload" required>
        <br>
        <input class="upload-btn" type="submit" value="Upload File" name="submit">
    </form>
</div>

</body>
</html>
