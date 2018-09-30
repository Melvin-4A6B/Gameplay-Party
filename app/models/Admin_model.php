<?php
  class Admin_model {

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getContent($query)
    {
      $data = $this->db->getAll($query);

      return $data;
    }

    public function editPageContent($query)
    {
      $data = $this->db->get($query);

      return $data;
    }

    public function edit($query)
    {
      $this->db->UpdateData($query);
    }

  }
