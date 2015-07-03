<?php

namespace Deployer;

server_prototype()
    ->setAuth(
        auth()
            ->setUserName('username'))
    )
    ->setEnv(
        env()
            ->set('deploy_path', '/var/www/project_dir')
    )
    ->setGroup('prod')
    // ->addStage(
    //     stage('preview')
    // )
;

    server() // Uses the prototype's authentication object
        ->setEnv(
            env()
                ->set('host', 'node1.domain.com')
        )
    ;

    server()
        ->setEnv(
            env()
                ->set('host', 'node2.domain.com')
        )
    ;

// Sets an empty Server object as the prototype
server_prototype();

    server()
        ->setAuth(
            auth()
                ->setUserName('username-for-node3')
                ->setPassword('password')
        )
        ->setEnv(
            env()
                ->set('host', 'node3.domain.com')
                ->set('port', 13455)
                ->set('deploy_path', '/var/www/different_project_dir') // A different deploy path
        )
        ->setGroup('dev')
    ;
