<?php

    class DB {

        private $connection;

        public function __construct($host, $dbname, $username, $password)
        {
            $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $pdo;
        }

        public function query($query, $params = array())
        {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($params);

            if (explode(' ', $query)[0] == 'SELECT') {
                return $stmt->fetchAll();
            }
        }
    }