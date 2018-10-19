<?php
  class Url {

    /**
     * @param text $key
     * 
     * Check if the post value is set
     * 
     * @return $_POST[$key]
     */
    public static function post($key)
    {
      return (isset($_POST[$key])) ? $_POST[$key] : false;
    }

    /**
     * @param string $key
     * 
     * Check if the get value is set
     * Decode the $_GET[$key]
     * 
     * @return $_GET[$key]
     */
    public static function get($key)
    {
      return (isset($_GET[$key])) ? urldecode($_GET[$key]) : false;
    }

  }
