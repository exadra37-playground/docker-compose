<?php

require 'strict.php';

printInt('2');

$connection = new PDO("mysql:host=mysql;dbname=project;charset=utf8", 'project', 'project');

$query = $connection->query("SHOW TABLES");

$databases = $query->fetchAll(PDO::FETCH_COLUMN);

foreach ($databases as $database) {

    echo "<p>Database: {$database}</p>";
}

phpinfo();

