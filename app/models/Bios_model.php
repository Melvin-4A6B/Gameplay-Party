<?php

class Bios_model
{
    /**
     * Bios_model constructor.
     * makes an new object called $this->db
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * @param $query string | sql query to be executed
     * @return $data array
     */
    public function get($query)
    {
        $data = $this->db->getAll($query);

        return $data;
    }

    /**
     * @param $table string | name of the table to insert
     * @param $values string | values to insert in table
     */
    public function insert($table, $values) {
        $data = $this->db->insert($table, $values);

        return $data;
    }
}
