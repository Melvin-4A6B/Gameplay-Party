<?php

class Bioscoop extends Controller
{

    public function __construct()
    {
        $this->model = new Bios_model;
    }

    public function get()
    {
        $query = "SELECT * FROM cinemas inner join cinema_pictures on cinema_pictures.cinema_id WHERE cinemas.cinema_id = cinema_pictures.cinema_id";
        $data = $this->model->get($query);

        return $data;
    }

    public function show()
    {
        $data["bioscopen"] = $this->get();
        Load::view("bioscoop", $data);
    }

    public function beheren()
    {
        $days = array(
            1 => 'Maandag',
            2 => 'Dinsdag',
            3 => 'Woensdag',
            4 => 'Donderdag',
            5 => 'Vrijdag',
            6 => 'Zaterdag',
            7 => 'Zondag'
        );

        $query = "SELECT * FROM reservation_times";
        $data['tijden'] = $this->model->get($query);
        $id = $_SESSION['uid']['user_id'];
        $query = "SELECT * FROM cinemas WHERE cinema_id = $id";
        $data['data'] = $this->model->get($query);
        Load::view("biosOverzicht", $data);
    }

    public function reserveringen()
    {
        $id = $_SESSION['uid']['role_id'];
        $query = "SELECT * FROM reservations INNER JOIN customers ON reservations.customer_id = customers.customer_id WHERE cinema_id = $id";
        $data['reserveringen'] = $this->model->get($query);

        Load::view("biosReserveringen", $data);
    }

}
