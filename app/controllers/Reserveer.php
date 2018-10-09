<?php
/**
 * Created by PhpStorm.
 * User: kaani
 * Date: 7-10-2018
 * Time: 16:22
 */

class Reserveer
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function reserve($id) {
        $data["tijden"] = $this->db->getAll("SELECT * FROM reservation_times WHERE cinema_id = $id");
        Load::view("reserveForm", $data);
    }
}