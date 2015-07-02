<?php

namespace Deployer\Server;

use Deployer\Server;

class Collection
{
    // /**
    //  * @param \Deployer\Server $Server
    //  * @return boolean true
    //  */
    // public function setPrototype(Server $Server);

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
