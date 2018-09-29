<?php
  class Session {

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

    public static function generateSessionKey($key)
    {

      $append = $GLOBALS["config"]["appName"];
      $version = $GLOBALS["config"]["version"];

      return md5($key.$append.$version);
    }

  }
