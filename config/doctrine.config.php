<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 29.04.16
 * Time: 12:32
 */

namespace NnxSkeletonMember\User;

return [
    Module::CONFIG_KEY => [
        'objectManagerName' => 'doctrine.entitymanager.nnx_skeleton_member_user'
    ],
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