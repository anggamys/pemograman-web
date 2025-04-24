<?php

setcookie("nama", "Moh Angga");
echo "Cookie telah disetel!";

setcookie("nama_teman", "John Doe", time() + 3600);
echo "Cookie nama_teman telah disetel!";
