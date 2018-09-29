<?php
  class Bios_model {

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getBios($query)
    {
      $data = $this->db->getAll($query);

      return $data;
    }

  }
