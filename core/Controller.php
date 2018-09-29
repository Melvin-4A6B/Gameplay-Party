<?php
  class Controller {

      public function debug($data)
      {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        exit();
      }

  }
