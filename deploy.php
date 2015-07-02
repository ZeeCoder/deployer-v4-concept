<?php

// Code over configuration!

namespace Deployer;

server_prototype(
    (new Auth())
        ->setUserName('username')
)
    ->set('deploy_path', '/var/www/project_dir')
;

    server() // Uses the prototype's authentication object
        ->set('name', 'node1-server')
        ->set('host', 'node1.domain.com')
    ;

    server() // Uses the prototype's authentication object
        ->set('name', 'node2-server')
        ->set('host', 'node2.domain.com')
    ;

server_prototype(null);

    server(
        (new Auth()) // Unique authentication method and data, which overrides the protoype
            ->setUserName('username-for-node3')
            ->setPassword('password')
    )
        ->set('name', 'node3-server')
        ->set('host', 'node3.domain.com')
        ->set('port', 13455) // A different port
        ->set('deploy_path', '/var/www/different_project_dir') // A different deploy path
    ;

Deployer::setDefaultServer('node1-server');
