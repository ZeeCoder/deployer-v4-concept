<?php

// All of the functions defined here forwards to the Deployer class.
// This way, using them is fully optional, so if one can still have the full
// functionality without these "helpers".
//
// The only real reason they exist, is to create a sense of familiarity in the
// users.

namespace Deployer;

function server_prototype(Auth $Authentication)
{
    return Deployer::createServerAsPrototype($Authentication);
}

function server(Auth $Authentication)
{
    return Deployer::createServer($Authentication);
}
