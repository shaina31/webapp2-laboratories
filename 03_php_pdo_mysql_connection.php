// This is from the index.php file
<?php

$host = 'localhost'; // your localhost name
$db = 'wad_activities'; // your database name
$user = 'root'; // your mysql user
$password = ''; // your mysql password

?>

// This is from the main 03_php_pdo_mysql_connection.php file

<?php

require 'index.php';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if ($pdo) {
        echo "You are connected to the $db database successfully!";
    }
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>
