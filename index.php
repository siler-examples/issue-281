<?php declare(strict_types=1);

namespace Acme;

use function Siler\GraphQL\{debug, init, subscriptions_at};

require_once __DIR__ . '/vendor/autoload.php';

debug();
subscriptions_at('ws://localhost:3000');
init(require_once __DIR__ . '/schema.php');