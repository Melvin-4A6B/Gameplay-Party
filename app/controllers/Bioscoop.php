<?php
  class Bioscoop {

    public function __construct()
    {
      $this->model = new Bios_model;
    }

    public function get()
    {
      $query = "SELECT * FROM bioscopen";
      $data = $this->model->getBios($query);

      return $data;
    }

    public function show()
    {
      $data["bioscopen"] = $this->get();
      Load::view("bioscoop", $data);
    }

  }
