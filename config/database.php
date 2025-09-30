<?php
$host = 'ep-frosty-rice-adbi5zsq-pooler.c-2.us-east-1.aws.neon.tech';
$port = '5432';
$db   = 'neondb';
$user = 'neondb_owner';
$pass = 'npg_Z6CifE2XrqhB'; // A mettre dans .env, pas laisser ici , $pass = getenv('DB_PASSWORD');
$sslmode = 'require';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;sslmode=$sslmode";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion PostgreSQL : " . $e->getMessage());
}