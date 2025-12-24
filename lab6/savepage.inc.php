<?php
$currentPage = $_SERVER['PHP_SELF'];

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'] = []; 
}

if (empty($_SESSION['visited_pages']) || end($_SESSION['visited_pages']) !== $currentPage) {
    $_SESSION['visited_pages'][] = $currentPage;
}
?>
