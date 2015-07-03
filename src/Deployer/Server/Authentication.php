<?php

namespace Deployer\Server;

use Deployer\Server\Collection as ServerCollection;

class Authentication
{
    /**
     * Checks whether the information stored seem to be enough for server
     * authentication or not.
     * @TODO: Possibly checks for ambiguity, if there's a chance for that.
     */
    public function validate();

    public function setUserName();
    public function setPassword();
    public function setKeyPhrase();
}
