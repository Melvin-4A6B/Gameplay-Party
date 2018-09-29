<?php
  class User extends Controller {

    public function login()
    {
      if(isset($_POST["login"]))
      {
        $this->validate($_POST["email"], $_POST["password"]);
      }
      else
      {
        Load::view("login");
      }
    }

    public function validate($email, $password)
    {
      if($this->auth($email, $password))
      {
        $user = new User_model;
        $query = "SELECT * FROM users WHERE email = '".$email."'";
        if($logged_in = $user->check($query))
        {
          session_start();
          $_SESSION["uid"] = $logged_in;
        }

        header("Location: ".ROOT);
      }
      else
      {
        return false;
      }
    }

    public function auth($email, $password)
    {
      $auth = false;
      if($email == ADMIN_EMAIL && $password == ADMIN_PASS)
      {
        $auth = true;
      }

      return $auth;
    }

    public function logout()
    {
      session_start();
      session_destroy();
      unset($_SESSION["uid"]);

      header("Location: ".ROOT);
      exit();
    }

  }
