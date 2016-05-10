<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 29.04.16
 * Time: 12:32
 */

namespace NnxSkeletonMember\User;

return [
    'doctrine' => [
        'driver' => [
            'NnxSkeletonMemberUserEntity' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],

        ],
    ],
];