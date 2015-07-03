<?php

namespace Deployer\Server;

use Deployer\Server;

/**
 * A collection of server objects.
 */
class Collection
{
    /**
     * @param \Deployer\Server $Server
     * @return boolean true
     */
    public function add(Server $Server);

    /**
     * @param integer $index
     * @return \Deployer\Server
     */
    public function get($index);

    public function getAll();

    /**
     * @param string $serverName
     * @return \Deployer\Server
     */
    public function getByName($serverName);

    public function filterByName($serverName);
    public function filterByGroup($serverGroup);
    public function filterByStage($serverStage);

    // etc
}
