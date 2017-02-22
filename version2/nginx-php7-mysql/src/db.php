<?php

require 'strict.php';

testStrictTypeInteger('2');

$connection = new PDO("mysql:host=mysql;dbname=project;charset=utf8", 'project', 'project');

$query = $connection->query("SHOW DATABASES");

$databases = $query->fetchAll(PDO::FETCH_COLUMN);

foreach ($databases as $database) {

    echo "<p>Database: {$database}</p>";
}

phpinfo();

