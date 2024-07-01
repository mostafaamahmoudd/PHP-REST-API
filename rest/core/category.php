<?php

class Category
{
    //db stuff
    private $conn;
    private $table = 'categories';

    //category properties 
    public $id;
    public $name;
    public $created_at;

    //constructor with db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    //getting post from db
    public function read()
    {
        //creat query
        $query = 'SELECT
                *
                FROM
                ' . $this->table;

        //prepare statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        return $stmt;
    }
}
