<?php

namespace Geekbrains\Application1\Infrastructure;

use Geekbrains\Application1\Application\Application;
use \PDO;

class Storage {

    private PDO $connection;

    public function __construct() {
        $this->connection = new PDO(
            Application::$config->get()['database']['DSN'],
            Application::$config->get()['database']['USER'], 
            Application::$config->get()['database']['PASSWORD']
        );


    }

    public function get(): PDO{
        return $this->connection;
    }
}