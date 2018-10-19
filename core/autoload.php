<?php
  /**
   * Autoload the controllers and models
   */
  spl_autoload_register(function($class)
  {

    if(file_exists("core/".$class.".php"))
    {
      require_once "core/".$class.".php";
    }
    elseif(file_exists("app/"."controllers/".$class.".php"))
    {
      require_once "app/"."controllers/".$class.".php";
    }
    elseif(file_exists("app/"."models/".$class.".php"))
    {
      require_once "app/"."models/".$class.".php";
    }

  });
