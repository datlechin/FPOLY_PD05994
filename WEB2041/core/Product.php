<?php

class Product
{
    private $db;

    private $count;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM products ORDER BY id DESC");

        $this->count = $result->num_rows;

        return $result->fetch_all();
    }

    public function count()
    {
        return $this->count;
    }
}