<?php

if (!empty($_FILES["fileToUpload"])) {
    $file_name = $_FILES["fileToUpload"]["name"];
    $tmp_name = $_FILES["fileToUpload"]["tmp_name"];

    if (move_uploaded_file($tmp_name, "files/" . $file_name)) {
        echo "File uploaded successfully!";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "No file selected.";
}
