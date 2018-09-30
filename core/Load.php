<?php
  class Load {

    public static function view($file, $vars = array())
    {

      extract($vars);
      $check = explode(",", $file);

      if(!isset($check[1]))
      {
        $file .= ".php";
      }

      require_once APP_PATH."views/assets/header.php";
      require_once APP_PATH."views/".$file;
      require_once APP_PATH."views/assets/footer.php";
    }

  }
