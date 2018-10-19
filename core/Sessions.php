<?php
  class Session {

    /**
     * Check if a session is started
     * Otherwise start a session
     * 
     * Loop through each existing $_COOKIE
     */
    public function __construct()
    {

      if(!isset($_SESSION))
      {
        session_start();
      }

      foreach($_COOKIE as $key => $value)
      {

        if(!isset($_SESSION[$key]))
        {

          json_decode($value);

          if(json_last_error() == JSON_ERROR_NONE)
          {
            $_SESSION[$key] = json_decode($value);
          }
          else
          {
            $_SESSION[$key] = $value;
          }

        }

      }

    }

    /**
     * @param array $key
     * 
     * Check if the $key param is an array
     * Loop through the array
     * Generate a session key if the session is checked
     * 
     * @return $_SESSION[$key]
     */
    public static function check($key)
    {

      if(is_array($key))
      {

        $set = true;

        foreach($key as $k)
        {

          if(!Session::check($k))
          {
            $set = false;
          }

        }

      }
      else
      {
        $key = Session::generateSessionKey($key);

        return isset($_SESSION[$key]);
      }

    }

    /**
     * @param array $key
     *
     * Check if the session exists
     *  
     * @return $_SESSION
     */
    public static function get($key)
    {

      if(isset($_SESSION[Session::generateSessionKey($key)]))
      {
        return $_SESSION[Session::generateSessionKey($key)];
      }
      else
      {
        return false;
      }

    }

    /**
     * @param array $key
     * @param array $value
     * @param int $ttl
     * 
     * Set the session equal to $value
     * Set the cookie to the session
     */
    public static function set($key, $value, $ttl = 0)
    {

      $_SESSION[Session::generateSessionKey($key)] = $value;

      if($ttl !== 0)
      {

        if(is_object($value) || is_array($value))
        {
          $value = json_encode($value);
        }

        setcookie(Session::generateSessionKey($key), $value, (time() + $ttl), "/", $_SERVER["HTTP_HOST"]);
      }

    }

    /**
     * @param array $key
     * 
     * Unset the session
     * Delete the cookie
     */
    public static function kill($key)
    {

      if(isset($_SESSION[Session::generateSessionKey[$key]]))
      {
        unset($_SESSION[Session::generateSessionKey[$key]]);
      }

      if(isset($_COOKIE[Session::generateSessionKey[$key]]))
      {
        setcookie(Session::generateSessionKey($key), "", (time() - 5000), "/", $_SERVER["HTTP_HOST"]);
      }

    }

    /**
     * Unset all sessions
     * Destroy all cookies
     */
    public static function endSession()
    {

      foreach($_SESSION as $key => $value)
      {
        unset($_SESSION[$key]);
      }

      foreach($_COOKIE as $key => $value)
      {
        setcookie($key, "", (time() - 5000), "/", $_SERVER["HTTP_HOST"]);
      }

      session_destroy();
    }

    /**
     * @param array $key
     * 
     * Generates a session key based on the application name and version
     * 
     * @return $value
     */
    public static function generateSessionKey($key)
    {

      $append = TITLE;
      $version = VERSION;

      $value = $key . $append . $version;

      return md5($value);
    }

  }
