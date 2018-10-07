<?php
  class Admin extends Controller {

    public function __construct()
    {
      $this->model = new Admin_model;
    }

    public function beheren()
    {
      $pageQuery = "SELECT * FROM pages";
      $cinemaQuery = "SELECT * FROM users WHERE role_id = 1";;

      $data["pages"] = $this->model->getContent($pageQuery);
      $data["cinemaUsers"] = $this->model->getContent($cinemaQuery);

      Load::view("beheer", $data);
    }

    public function pagina_bewerken($id)
    {
      $query = "SELECT * FROM pages WHERE page_id = '".$id."'";
      $data["edits"] = $this->model->editPageContent($query);
      Load::view("bewerk", $data);
    }

    public function update($id)
    {
      if(isset($_POST["bewerken"]))
      {
        $naam = strip_tags($_POST["naam"]);
        $content = strip_tags($_POST["content"]);
        $query = "UPDATE pages SET page_name = '$naam' , page_content = '$content' WHERE page_id = '$id'";
        $this->model->edit($query);
        $this->beheren();
      }
    }

    public function addCinema()
    {
      if(isset($_POST["addCinema"]))
      {
        $naam = strip_tags($_POST["name"]);
        $straatnaam = strip_tags($_POST["straatnaam"]);
        $huisnummer = strip_tags($_POST["huisnummer"]);
        $postcode = strip_tags($_POST["postcode"]);
        $plaats = strip_tags($_POST["plaats"]);
        $stad = strip_tags($_POST["stad"]);
        $auto = strip_tags($_POST["auto"]);
        $ov = strip_tags($_POST["ov"]);
        $fiets = strip_tags($_POST["fiets"]);
        $voorwaarden = strip_tags($_POST["voorwaarden"]);
        $rolstoel = strip_tags($_POST["rolstoel"]);

        if($rolstoel == 'ja')
        {
          $wheelchair = 1;
        }
        else
        {
          $wheelchair = 0;
        }

        $query = "INSERT INTO cinemas (cinema_name, street, house_number, postal_code, city, state, car_accessibility, ov_accessibility, bike_accessibility, wheelchair_accessibility, cinema_conditions) VALUES('$naam', '$straatnaam', '$huisnummer', '$postcode', '$plaats', '$stad', '$auto', '$ov', '$fiets', '$wheelchair', '$voorwaarden')";
        $this->model->edit($query);
        $this->beheren();
      }
      else
      {
        Load::view("addBios");
      }
    }

    public function getCinemaUsers()
    {
      $query = "SELECT * FROM users WHERE role_id = 1";
      $data["cinemaUsers"] = $this->model->getContent($query);

      return $data;
    }

  }
