<?php

require_once __DIR__ . '/../../config/config.php';

if (isset($_SESSION['user_id']) && isset($_SESSION['session_id'])) {
    endUserSession($pdo);
}

$_SESSION = [];

session_destroy();

header("Location: /it34a_lab_db/index.php");
exit;

?>