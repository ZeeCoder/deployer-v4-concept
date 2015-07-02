<?php

namespace Deployer;

use Deployer\Server\Environment as ServerEnvironment;

class Server
{
    private $auth;
    private $env;

    function __construct(Auth $auth)
    {
        $this->auth = $auth;
        $this->env = new ServerEnvironment();
    }

    public function set($envKey, $value)
    {
        $this->env->set($envKey, $value);
    }
}
