<?php

namespace leo;

class config
{
    private $_developmentServers = [];

    public function __construct()
    {
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';
        // $this->http_host = $_SERVER['HTTP_HOST'];
        // echo $this->http_host;
    }
}