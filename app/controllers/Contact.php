<?php
  class Contact extends Controller {

    public function bla()
    {
      if(!Url::post("contact"))
      {
        Load::view("contact");
      }
    }

  }
