<?php
session_start();
session_destroy();
echo "<p align='center'>Anda telah logout!</p>";
header("refresh:1; url=login.php");
exit;
