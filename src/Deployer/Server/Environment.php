<?php

namespace Deployer;

class Environment
{
    public function getKeys();

    public function getMandatoryConfigurations()
    {
        return ['deploy_path', 'host'];
    }

    public function validate() {
        // Validating mandatory configurations
        $this->getMandatoryConfigurations();
        // ...
    }
}
