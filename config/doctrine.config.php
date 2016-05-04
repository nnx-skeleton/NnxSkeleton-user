<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 29.04.16
 * Time: 12:32
 */

namespace NnxSkeleton\User;

return [
    'doctrine' => [
        'driver' => [
            'NnxSkeletonUserEntity' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],

        ],
    ],
];