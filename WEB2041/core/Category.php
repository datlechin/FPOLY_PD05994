<?php

class Category
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM categories");

        return $result->fetch_all();
    }
}