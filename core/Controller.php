<?php

class Controller
{
      public function __construct()
      {
          /**
           * Set the locale to Dutch
           */
          setlocale(LC_ALL, "nl_NL");
      }
    
    /**
     * @param array $data
     * 
     * Var dump the data, add pre taggs and exit the script
     * 
     * @return $data  
     */  
    public function debug($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        exit();
    }

    /**
     * @param string $data
     * 
     * Sanitize the data
     * 
     * @return $data
     */
    public function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

}
