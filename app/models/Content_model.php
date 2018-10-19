<?php

class Content_model
{
    /**
     * Content_model constructor.
     * makes an new object called $this->db
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * @param $query string | sql query to be executed
     * @return $data array | returns the "page_content" of the $data array
     */
    public function getContent($query)
    {
        $data = $this->db->get($query);

        return $data["page_content"];
    }

}
