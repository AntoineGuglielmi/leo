<?php

namespace leo;

use leo\config;
use Dotenv\Dotenv;

class leo
{
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->safeLoad();
        
        $this->config = new config();
    }
}