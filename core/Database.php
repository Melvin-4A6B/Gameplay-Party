<?php

class Database extends Controller
{

    function __construct()
    {
        try {
            $this->conn = new PDO(DB_DSN, DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insert($table, $params)
    {
        $args = '';

        // Get column names
        $result = $this->conn->prepare("DESCRIBE $table");
        $result->execute();
        $fields = $result->fetchAll(PDO::FETCH_COLUMN);

        // Remove the id (first element)
        array_shift($fields);

        // Make a string from the fields array
        $fields = implode(', ', $fields);
//        self::debug($fields);

        // Loop through each param
        foreach($params as $key => $value)
        {
            $args .= ':' . $key . ', ';
            $binds[':' . $key] = $value;
        }

        // Remove the last comma
        $args = rtrim($args, ', ');

        $query = "INSERT INTO " . $table . "(" . $fields . ") VALUES (" . $args . ")";
//        self::debug($args);

        $result = $this->conn->prepare($query);

        // Execute the bindings
        $result->execute($binds);

    }

    public function create($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $this->conn->lastInsertId();
    }

    public function get($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $read = $stmt->fetch(PDO::FETCH_ASSOC);

        return $read;
    }

    public function getAll($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $read = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $read;
    }

    public function UpdateData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function DeleteData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

}
