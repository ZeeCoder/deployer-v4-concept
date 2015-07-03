<?php

namespace Deployer;

use Server\Authentication as ServerAuth;
use Server\Collection as ServerCollection;

class Deployer
{
    private $serverPrototype;

    public function __construct()
    {
        $this->serverCollection = new ServerCollection();
    }

    public static function createServerAsPrototype()
    {
        return $this->serverPrototype = new Server();
    }

    public static function setPrototypeServer(Server $Server);
    public static function getPrototypeServer();

    public static function createServer()
    {
        if ($this->serverPrototype instanceof Server) {
            return clone $this->serverPrototype;
        }

        return new Server($Auth);
    }

    public static function run()
    {
        // ...filtering the server collection (group, stage etc)...
        // Suppose we have the filtered `$serverCollection` variable

        // Validating the servers the tasks should run on.
        // (Auth object, configurations etc)
        foreach ($serverCollection as $Server) {
            $Server->validate();
        }

        // running tasks on servers
    }
}
