<?php
require_once('Database.php');
$id = $_GET['id'];
Database::delete($id);
header('Location: ../index.php');
