<?php

class Bios_model
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get($query)
    {
        $data = $this->db->getAll($query);

        return $data;
    }
}
