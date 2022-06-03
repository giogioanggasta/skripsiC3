
<?php

var_dump(PDO::getAvailableDrivers());

//check session
session_start();
echo '<pre>';
var_dump($_SESSION);

// if (!isset($_SESSION['is_logged_in'])) {
//     header("location: view/Login.php", true, 301);
//     exit();
// }
