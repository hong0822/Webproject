<?php

namespace DB;
use PDO;
use PDOEXception;

class DB {
    public function __construct()
}

try {

$db = new PDO('mysql:host=localhost;dbname=hello','peter','World123');
if (isset($db)) printf("Connection Success");
} catch(PDOException $e) {
 printf("Could not connect to the database: %s ",$e->getMessage());
}
?>