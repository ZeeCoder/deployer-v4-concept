<?php

namespace Deployer;

use Server\Authentication as ServerAuth;
use Server\Environment as ServerEnvironment;

class Server
{
    private $auth;
    private $env;

    function __construct()
    {
        $this->auth = new ServerAuth();
        $this->env = new ServerEnvironment();
    }

    public function __clone()
    {
        // Additional code, so that the result would be a deep copy, which
        // includes objects too. (Auth, Environment, etc)
    }

    public function getAuth();
    public function auth() {
        return $this->getAuth();
    };

    public function getEnv();
    public function env() {
        return $this->getEnv();
    };

    public function setGroup($serverGroup);
    public function getGroup();


    /**
     * Validates the Server, before deployments.
     * This way we lower the chance of unexpected errors during task executions.
     */
    public function validate()
    {
        $this->auth->validate();
        $this->env->validate();
    }
}
