<?php

require_once __DIR__ . '/../vendor/autoload.php';

use RubensLyra\ApiNotifications\Notifications;

// Simulando resultado
Notifications::renderAssets();
Notifications::showToast("Olá! Essa é uma notificação de teste 😎", "success");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo com api-notifications</title>
</head>
<body>
    <h1>Exemplo</h1>
</body>
</html>
