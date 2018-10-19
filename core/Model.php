<?php
  class Model {

    public $db;

    /**
     * Call the db_connection method to create a database connection
     */
    public function __construct()
    {
      $this->db_connection();
    }

    /**
     * Database connection method
     */
    public function db_connection()
    {
      $dsn = "mysql:dbname={$GLOBALS["config"]["database"]["name"]};host={$GLOBALS["config"]["database"]["host"]}";
      $this->db = new Database();
      $this->db->connect($dsn, $GLOBALS["config"]["database"]["username"], $GLOBALS["config"]["database"]["password"]
      );
    }

  }
