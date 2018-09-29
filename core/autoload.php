<?php
  spl_autoload_register(function($class)
  {

    if(file_exists(CORE_PATH.$class.".php"))
    {
      require_once CORE_PATH.$class.".php";
    }
    elseif(file_exists(APP_PATH."controllers/".$class.".php"))
    {
      require_once APP_PATH."controllers/".$class.".php";
    }
    elseif(file_exists(APP_PATH."models/".$class.".php"))
    {
      require_once APP_PATH."models/".$class.".php";
    }

  });
