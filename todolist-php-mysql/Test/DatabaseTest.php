<?php 

require_once __DIR__ . '/../Config/Database.php';

use \Config\Database;

$db = Database::getConnection();
echo "success";

?>