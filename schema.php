<?php declare(strict_types=1);

namespace Acme;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Schema;
use function Siler\GraphQL\publish;

return new Schema([
    'query' => new ObjectType([
        'name' => 'Query',
        'fields' => [
            'hello' => [
                'type' => Type::string(),
                'resolve' => function () {
                    publish('hello');
                    return 'hello world from query';
                },
            ]
        ]
    ]),
    'subscription' => new ObjectType([
        'name' => 'Subscription',
        'fields' => [
            'hello' => [
                'type' => Type::string(),
                'resolve' => function () {
                    return 'hello world from subscription';
                },
            ]
        ]
    ]),
]);