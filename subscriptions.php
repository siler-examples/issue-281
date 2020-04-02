<?php declare(strict_types=1);

namespace Acme;

use function Siler\GraphQL\subscriptions_manager;
use function Siler\Ratchet\graphql_subscriptions;

require_once __DIR__ . '/vendor/autoload.php';
$schema = require_once __DIR__ . '/schema.php';

$manager = subscriptions_manager($schema);
graphql_subscriptions($manager)->run();