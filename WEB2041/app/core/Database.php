<?php

namespace core;

use PDO;
use PDOException;
use PDOStatement;

class Database
{
    private string $host = 'localhost';

    private string $dbname = 'shop';

    private string $user = 'root';

    private string $password = '';

    private PDO $pdo;

    /**
     * Database constructor.
     *
     * @param $host
     * @param $dbname
     * @param $user
     * @param $password
     */
    public function __construct($host, $dbname, $user, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $this->pdo = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function execute(string $sql, array $params = []): PDOStatement
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);

            return $stmt;
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        } finally {
            $stmt->closeCursor();
        }

        return $stmt;
    }

    public function lastInsertId(): int
    {
        return $this->pdo->lastInsertId();
    }
}