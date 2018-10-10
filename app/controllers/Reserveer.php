<?php
/**
 * Created by PhpStorm.
 * User: kaani
 * Date: 7-10-2018
 * Time: 16:22
 */

class Reserveer extends Controller
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function bios($id) {
        $data["tijden"] = $this->db->getAll("SELECT * FROM reservation_times INNER JOIN cinemas on reservation_times.cinema_id = cinemas.cinema_id WHERE cinemas.cinema_id = $id");
        $data["naam"] = $this->db->getAll("SELECT cinema_name FROM cinemas  WHERE cinema_id = $id");
        $data["disabled"] = self::disabledCheck($data['tijden']);
        Load::view("reserveForm", $data);
    }

    public function disabledCheck($data)
    {
        $disabled = '';

        if(empty($data))
        {
            $disabled = "disabled";
            $empty = "<option value=''>Geen tijden beschikbaar</option>";
            $options = array($disabled, $empty);
        }
        return $options;
    }
}