<?php
  class Bioscoop {

    public function __construct()
    {
      $this->model = new Bios_model;
    }

    public function get()
    {
      $query = "SELECT cinema_name, cinema_picture_path, info_url FROM cinemas inner join cinema_pictures on cinema_pictures.cinema_id WHERE cinemas.cinema_id = cinema_pictures.cinema_id";
      $data = $this->model->getBios($query);

      return $data;
    }

    public function show()
    {
      $data["bioscopen"] = $this->get();
      $data["pictures"] = $this->get();
      Load::view("bioscoop", $data);
    }

  }
