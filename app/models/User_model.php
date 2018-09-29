<?php
  class User_model {

    public function __construct()
    {
      $this->db = new Database;
    }

    public function check($query)
    {
      $data = $this->db->get($query);

      return $data;
    }

  }
