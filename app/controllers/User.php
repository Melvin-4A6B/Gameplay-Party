<?php
  class User extends Controller {

    public function __construct()
    {
        $this->user = new User_model;
    }

    public function login()
    {
      if(isset($_POST["login"]))
      {
        $this->validate(strip_tags($_POST["email"]), strip_tags($_POST["password"]));
      }
      else
      {
          //hij gaat altijd hier
        Load::view("login");
      }
    }

    public function validate($email, $password)
    {
      if($this->auth($email, $password))
      {
          session_start();
          $_SESSION["uid"] = $logged_in;

          header("Location: ".ROOT);
      }
      else
      {
        $data["error"] = "Incorrecte login gegevens";
        Load::view("login", $data);
      }
    }

    public function auth($email, $password)
    {
      $auth = false;

      $query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
      $result = $this->user->check($query);

      if($result)
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
