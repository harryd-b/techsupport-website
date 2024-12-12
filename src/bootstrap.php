<?php
$env = getenv('ENV') ?: 'development';
$envFile = __DIR__ . '/../.env.' . ($env === 'production' ? 'prod' : 'dev');
if (!file_exists($envFile)) {
    $envFile = __DIR__ . '/../.env.dev';
}
$vars = parse_ini_file($envFile);
foreach ($vars as $k => $v) {
    $_ENV[$k] = $v;
}

$dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("DB Connection failed: " . $e->getMessage());
}

// Placeholder AI and payment integration
function aiChat($message) {
    return "AI Response to: " . $message;
}
