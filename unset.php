<?php
// In this section, the purpose of this php file is to delete existing username and password
// It works when the logout button clicked by the user
session_start();
session_unset();
session_destroy();
header('Location: index.php');
exit();
?>