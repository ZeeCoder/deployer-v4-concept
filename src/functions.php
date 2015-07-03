<?php

// All of the functions defined here forwards to the Deployer class.
// This way, using them is fully optional, so if one can still have the full
// functionality without these "helpers".
//
// The only real reason they exist, is to create a sense of familiarity in the
// users.

namespace Deployer;

function server_prototype()
{
    return Deployer::createServerAsPrototype();
}

function server()
{
    return Deployer::createServer();
}

public function auth()
{
    return new Server\Authentication();
}

public function env()
{
    return new Server\Environment();
}
