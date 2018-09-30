<?php
  class Home extends Controller {

    public function __construct()
    {
      $this->model = new Content_model;
    }

    public function index()
    {
      $data["welcome"] = TITLE; // TITLE is defined in: core/config.php

      $query = "SELECT * FROM pages WHERE page_name = 'over-ons'";
      $data["aboutUs"] = $this->model->getContent($query);
      Load::view("home", $data);
    }

  }
