<?php

namespace framework\Database;

use PDO;


class Connection
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }


    function connectDB() {

        try {
            return new PDO(
                $this->config['database']['databasetype'] . ':host=' . $this->config['database']['host'] . ';dbname=' . $this->config['database']['name'],
                $this->config['database']['user'],
                $this->config['database']['password']);

        } catch (\Exception $e) {
            echo 'Error de conexio a la base de dades';
        }

    }
}