<?php

namespace ApiNotifications;

class Notifications
{
    public static function renderAssets(): void
    {
        echo '<link rel="stylesheet" href="/vendor/rubenslyra/api-notifications/assets/notifications.css">';
        echo '<script src="/vendor/rubenslyra/api-notifications/assets/notifications.js" defer></script>';
    }

    public static function showToast(string $message, string $type = 'info'): void
    {
        echo "<script>
            window.addEventListener('DOMContentLoaded', () => {
                if (typeof showToast === 'function') {
                    showToast(" . json_encode($message) . ", '$type');
                } else {
                    console.warn('Função showToast não carregada!');
                }
            });
        </script>";
    }
}
