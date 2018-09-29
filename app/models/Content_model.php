<?php
  class Content_model {

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getContent($query)
    {
      $data = $this->db->get($query);

      return $data["page_content"];
    }

  }
