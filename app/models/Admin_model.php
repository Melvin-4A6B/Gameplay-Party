<?php

class Admin_model
{

    /**
     * Admin_model constructor.
     * makes an new object called $this->db
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * @param $query  string| sql to be executed
     * @return $data array
     */
    public function getContent($query)
    {
        $data = $this->db->getAll($query);

        return $data;
    }

    /**
     * @param $query  string | sql to be executed
     * @return $data  array | $data will be returned in an array
     */
    public function editPageContent($query)
    {
        $data = $this->db->get($query);

        return $data;
    }

    /**
     * @param $query string | sql to be executed
     */
    public function edit($query)
    {
        $this->db->UpdateData($query);
    }

}
