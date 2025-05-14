<?php
setcookie("nama", "Moh Angga");
setcookie("nama_teman", "John Doe", time() + 3600);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Set Cookie</title>
</head>

<body>
    <p>Cookie telah disetel!</p>
    <p>Cookie nama_teman telah disetel!</p>
</body>

</html>