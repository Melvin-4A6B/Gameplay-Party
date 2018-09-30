<?php
  class Admin extends Controller {

    public function __construct()
    {
      $this->model = new Admin_model;
    }

    public function beheren()
    {
      $pageQuery = "SELECT * FROM pages";
      $biosQuery = "SELECT * FROM cinemas";
      $data["pages"] = $this->model->getContent($pageQuery);
      $data["cinemas"] = $this->model->getContent($biosQuery);

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
        $naam = $_POST["naam"];
        $content = $_POST["content"];
        $query = "UPDATE pages SET page_name = '$naam' , page_content = '$content' WHERE page_id = '$id'";
        $this->model->edit($query);
        $this->beheren();
      }
    }

    public function addCinema()
    {
      if(isset($_POST["addCinema"]))
      {
        $naam = $_POST["name"];
        $straatnaam = $_POST["straatnaam"];
        $huisnummer = $_POST["huisnummer"];
        $postcode = $_POST["postcode"];
        $plaats = $_POST["plaats"];
        $stad = $_POST["stad"];
        $auto = $_POST["auto"];
        $ov = $_POST["ov"];
        $fiets = $_POST["fiets"];
        $voorwaarden = $_POST["voorwaarden"];
        $rolstoel = $_POST["rolstoel"];

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

  }
