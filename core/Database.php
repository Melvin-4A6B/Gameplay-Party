<?php

class Database
{

    /**
     * Creates a new database connection
     * 
     * @return $this->conn
     */
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

    /**
     * @param text $sql
     * 
     * simple insert method to insert data into the database
     * 
     * @return last inserted id
     */
    public function create($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $this->conn->lastInsertId();
    }

    /**
     * @param text $sql
     * 
     * simple get method to fetch data from the database into an associative array
     * 
     * @return $read
     */
    public function get($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $read = $stmt->fetch(PDO::FETCH_ASSOC);

        return $read;
    }

    /**
     * @param text $sql
     * 
     * simple getAll method to fetch all data from the database into an associative array
     * 
     * @return last $read
     */
    public function getAll($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $read = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $read;
    }

    /**
     * @param text $sql
     * 
     * simple update method to update data in the database
     */
    public function UpdateData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    /**
     * @param text $sql
     * 
     * simple delete method to delete data from the database
     */
    public function DeleteData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

}
