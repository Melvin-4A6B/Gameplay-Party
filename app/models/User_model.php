<?php

class User_model
{
    /**
     * User_model constructor.
     * makes an new object called $this->db
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * @param $query string | sql query to be executed
     * @return $data array | an array with the result of the sql query
     */
    public function check($query)
    {
        $data = $this->db->get($query);

        return $data;
    }

}
