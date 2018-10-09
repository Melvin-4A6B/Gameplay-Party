<?php
  class Bioscoop {

    public function __construct()
    {
      $this->model = new Bios_model;
    }

    public function get()
    {
      $query = "SELECT * FROM cinemas inner join cinema_pictures on cinema_pictures.cinema_id WHERE cinemas.cinema_id = cinema_pictures.cinema_id";
      $data = $this->model->getBios($query);

      return $data;
    }

    public function show()
    {
      $data["bioscopen"] = $this->get();
      Load::view("bioscoop", $data);
    }

  }
