<?php

class Database {

	function __construct()
  {
		try
    {
		    $this->conn = new PDO(DB_DSN, DB_USER, DB_PASS);
		    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		 	  return $this->conn;
		}

		catch(PDOException $e)
    {
    	echo $e->getMessage();
    }
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
