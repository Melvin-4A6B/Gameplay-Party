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
        $query = "SELECT * FROM reservation_times";
        $data['tijden'] = $this->model->get($query);
        $id = $_SESSION['uid']['user_id'];
        $query = "SELECT * FROM cinemas WHERE cinema_id = $id";
        $data['data'] = $this->model->get($query);
        Load::view("biosOverzicht", $data);
    }
}
