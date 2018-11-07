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
        $this->model = new Bios_model;
        $this->db = new Database;
    }

    /**
    * @param int $id
    *
    * bios() retrieve data from the database to create a reservation form.
    **/
    public function bios($id)
    {
        $data["tijden"] = $this->model->get("SELECT * FROM reservation_times INNER JOIN cinemas on reservation_times.cinema_id = cinemas.cinema_id WHERE cinemas.cinema_id = $id");
        $data["naam"] = $this->model->get("SELECT cinema_name FROM cinemas  WHERE cinema_id = $id");
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
        $query = "SELECT rooms.room_id from reservation_times INNER JOIN rooms on rooms.room_id = reservation_times.room_id WHERE reservation_times.cinema_id = $id";
        $data['zaal'] = $this->model->get($query);
        Load::view("reserveForm", $data);
    }

    /**
     * disabledCheck()
     *
     * @param string $data
     *
     * @return $options string
    **/
    public function disabledCheck($data)
    {
        $disabled = '';
        $options = '';

        if (empty($data)) {
            $disabled = "disabled";
            $empty = "<option value=''>Geen tijden beschikbaar</option>";
            $options = array($disabled, $empty);
        }
        return $options;
     }

    /**
    * process() checks and changes to input so it can be correctly placed in the database
     *
     * @return if set loads reserveform.php and gives $data with it of else it will only load reserveform.php
     */
    public function process()
    {
        if (isset($_POST['reserveer'])) {
            $data['firstName'] = self::sanitize(Url::post("voornaam"));
            $data['lastName'] = self::sanitize(Url::post("achternaam"));
            $data['phone'] = self::sanitize(Url::post("telefoonnummer"));
            $data['streetname'] = self::sanitize(Url::post("straatnaam"));
            $data['houseNumber'] = self::sanitize(Url::post("huisnummer"));
            $data['addition'] = self::sanitize(Url::post("toevoeging"));
            $data['city'] = self::sanitize(Url::post("stad"));
            $data['postalCode'] = self::sanitize(Url::post("postcode"));

            $date = explode(" ", Url::post("datum") );

            $res['day'] = $date[2];
            $res['endTime'] = $date[4];
            $res['beginTime'] = $date[5];
            $res['persons'] = self::sanitize(Url::post("aantal_personen"));

//            self::debug($data);
//            $this->model->insert('customers', $data);
//            $this->model->insert('reservations', $res);
            $c_sql = "INSERT INTO `customers` (`first_name`, `last_name`, `phone_number`, `street_name`, `house_number`, `addition`, `postal_code`, `city`, `state`) 
                      VALUES ('$data[firstName]', '$data[lastName]',  '$data[phone]', '$data[streetname]', '$data[houseNumber]', '$data[addition]', '$data[postalCode]', '$data[city]', 2 )";
            $this->db->create($c_sql);

            $r_sql = "INSERT INTO `reservations`(`customer_id`, `cinema_id`, `room_id`, `reservation_date`, `begin_time`, `end_time`, `amount_persons`, `subtotal`, `total`, `reserved`) 
                      VALUES ()";
            $this->db->create($r_sql);

            $data['msg'] = "uw reservering is succesvol verwerkt";
            Load::view('reserveForm', $data);
        } else {
            Load::view('reserveForm');
        }
    }
}
