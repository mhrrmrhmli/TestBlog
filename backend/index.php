<?php
include 'includes/header.php';
include 'includes/sidebar.php';

$route = $_GET['route'];

switch ($route) {
    case "admins":
        include_once('admins/index.php');
        break;
    case "admins/edit":
        include_once('admins/edit.php');
        break;
    case "admins/delete":
        include_once('admins/delete.php');
        break;
    default :
        include_once('dashboard.php');
        break;
}

include 'includes/footer.php';

?>
