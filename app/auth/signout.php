<?php

session_start();

session_unset();

session_destroy();

header("Location: /it34a_lab_db/index.php");

exit;

?>