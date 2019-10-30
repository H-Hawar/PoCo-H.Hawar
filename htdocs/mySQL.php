<?php
$host = 'sql108.epizy.com';
$db   = 'epiz_24664989_test_store';
$user = 'epiz_24664989';
$pass = '1TvSV8Elr1eIp';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];

  try {
    $pdo = new PDO($dsn, $user, $pass, $options);
  } catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

  $stmt = $pdo->query('SELECT id FROM products');
while ($row = $stmt->fetch())
{
    echo $row['naidme'] . "\n";
}
?>