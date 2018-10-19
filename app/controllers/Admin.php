<?php

/**
 * Admin controller contains the methods for managing the webapplication
 **/
class Admin extends Controller
{

    public function __construct()
    {
        $this->model = new Admin_model;
    }

    /**
     * accountBeheer() retrieves all cinnema accounts from the database so they can be shown in a table
     **/
    public function accountBeheer()
    {
        $cinemaQuery = "SELECT * FROM users WHERE role_id = 1";;
        $data["cinemaUsers"] = $this->model->getContent($cinemaQuery);
        Load::view("accountBeheer", $data);
    }

    /**
     * paginaBeheer retrieves all pages from the database so they can be shown in a table
     **/
    public function paginaBeheer()
    {
        $pageQuery = "SELECT * FROM pages";
        $data["pages"] = $this->model->getContent($pageQuery);
        Load::view("paginaBeheer", $data);
    }

    /**
     * @param $id
     *
     * pagina_bewerken() retrieves all pages with a specific id.
     * $id is the integer you give the method so it can retrieve that specific page.
     **/
    public function pagina_bewerken($id)
    {
        $query = "SELECT * FROM pages WHERE page_id = '" . $id . "'";
        $data["edits"] = $this->model->editPageContent($query);
        Load::view("bewerk", $data);
    }

    /**
     * @param $id
     *
     * update() retrieves the data that the user has typed in the form and updates the the row with the corresponding id.
     **/
    public function update($id)
    {
        if (isset($_POST["bewerken"])) {
            $naam = strip_tags($_POST["naam"]);
            $content = strip_tags($_POST["content"]);
            $query = "UPDATE pages SET page_name = '$naam' , page_content = '$content' WHERE page_id = '$id'";
            $this->model->edit($query);
            $this->beheren();
        }
    }

    /**
     * addCinema() retrieves all data that the user has typed in the form and inserts it into the cinemas table
     **/
    public function addCinema()
    {
        if (isset($_POST["addCinema"])) {
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

            if ($rolstoel == 'ja') {
                $wheelchair = 1;
            } else {
                $wheelchair = 0;
            }

            $query = "INSERT INTO cinemas (cinema_name, street, house_number, postal_code, city, state, car_accessibility, ov_accessibility, bike_accessibility, wheelchair_accessibility, cinema_conditions) VALUES('$naam', '$straatnaam', '$huisnummer', '$postcode', '$plaats', '$stad', '$auto', '$ov', '$fiets', '$wheelchair', '$voorwaarden')";
            $this->model->edit($query);
            $this->beheren();
        } else {
            Load::view("addBios");
        }
    }
}
