<?php

// Code over configuration!

use Deployer\Deployer;
use Deployer\Auth;
use Deployer\Server;
use Deployer\ServerEnvironment;

Deployer::addAuth((new Auth())
    ->setUserName('username')
    // ->forwardAgent()
);

Deployer::addDefaultEnvironment((new ServerEnvironment)
    ->set('deploy_path', '/var/www/project_dir')
);

Deployer::addServer(
    (new Server())
        ->set('name', 'node1-server')
        ->set('host', 'node1.domain.com')
);

Deployer::addServer(
    (new Server())
        ->set('name', 'node2-server')
        ->set('host', 'node2.domain.com')
);

Deployer::addServer(
    (new Server())
        ->set('name', 'node3-server')
        ->set('host', 'node3.domain.com')
        ->set('port', 13455) // A different port
        ->set('deploy_path', '/var/www/different_project_dir') // different deploy path
        ->addAuth((new Auth()) // Different authentication method and data
            ->setUserName('username-for-node3')
            ->setPassword('password')
        )
);

Deployer::setDefaultServer('node1-server');

Deployer::run();
