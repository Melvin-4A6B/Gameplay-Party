<?php
  class Admin extends Controller {

    public function __construct()
    {
      $this->model = new Admin_model;
    }

    public function beheren()
    {
      $query = "SELECT * FROM pages";
      $data["pages"] = $this->model->getContent($query);

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
        // $this->debug($_POST);
        $naam = $_POST["naam"];
        $content = $_POST["content"];
        $query = "UPDATE pages SET page_name = '$naam' , page_content = '$content' WHERE page_id = '$id'";
        $this->model->bewerkPagina($query);
        $this->beheren();
//        header("Location: ".ROOT."admin/beheren/");

      }

    }

  }
