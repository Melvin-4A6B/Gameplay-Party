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
        $days = array(
            1 => 'Maandag',
            2 => 'Dinsdag',
            3 => 'Woensdag',
            4 => 'Donderdag',
            5 => 'Vrijdag',
            6 => 'Zaterdag',
            7 => 'Zondag'
        );
        $data['dag'] = $days;
        Load::view("reserveForm", $data);
    }

    public function disabledCheck($data)
    {
        $disabled = '';
        $options = '';

        if(empty($data))
        {
            $disabled = "disabled";
            $empty = "<option value=''>Geen tijden beschikbaar</option>";
            $options = array($disabled, $empty);
        }
        return $options;
    }
}

