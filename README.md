# RubensLyra/api-notifications

Sistema simples de notificações visuais estilo toastbox para projetos PHP. Ideal para exibir mensagens como sucesso, erro, info e warning sem complicações.

## 🚀 Instalação

```bash
composer require rubenslyra/api-notifications
```

## ✅ Uso básico

```php
use RubensLyra\ApiNotifications\Notifications;

Notifications::renderAssets(); // inclui CSS e JS
Notifications::showToast('Olá mundo!', 'success');
```

> Tipos disponíveis: `success`, `error`, `info`, `warning`.

## 📄 Licença

MIT License © Rubens Lyra


## 📜 `LICENSE`

Use a licença [MIT](https://opensource.org/license/mit/) padrão:

```text
MIT License

Copyright (c) 2025 Rubens Lyra

Permission is hereby granted, free of charge, to any person obtaining a copy...
```
