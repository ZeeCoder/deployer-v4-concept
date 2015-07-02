<?php

namespace Deployer;

use Deployer\Server\Collection as ServerCollection;

class Deployer
{
    public function __construct()
    {
        $this->serverCollection = new ServerCollection();
    }

    public static function createServerAsPrototype()
    {
        $Server = new Server();
        $this->serverCollection->setPrototype($Server);

        return $Server;
    }

    public static function createServer()
    {
        return new Server();
    }
}
