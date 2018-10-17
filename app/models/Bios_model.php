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

    public function insert($table, $values) {
        $data = $this->db->insert($table, $values);

        return $data;
    }
}
