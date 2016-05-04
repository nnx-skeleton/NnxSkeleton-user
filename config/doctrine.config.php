<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 29.04.16
 * Time: 12:32
 */

namespace NnxMember\User;

return [
    'doctrine' => [
        'driver' => [
            'NnxSkeletonUserEntityUser' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],

        ],
    ],
];