<?php
  class User extends Controller {

    public function __construct()
    {
        $this->user = new User_model;
    }

    /**
    * login() checks the validity of the input.
    **/
    public function login()
    {
      if(isset($_POST["login"]))
      {
        $this->validate(strip_tags($_POST["email"]), strip_tags($_POST["password"]));
      }
      else
      {
        Load::view("login");
      }
    }

    /**
    * @param $email
    * @param $password
    *
    * validate() collects the input and sends it to auth(), if the result is positive it logs the user in, otherwise it gives a error.
    **/
    public function validate($email, $password)
    {
      if($logged_in = $this->auth($email, $password))
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

    /**
    * @param $email
    * @param $password
    *
    * auth() compares the input with the content in the table to check if it is correct.
    *
    * @return $auth
    **/
    public function auth($email, $password)
    {
      $auth = false;

      $query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
      $result = $this->user->check($query);

      if($result)
      {
        $auth = $result;
      }

      return $auth;
    }

    /**
    * logout() ends the current session, so no user has logged in.
    **/
    public function logout()
    {
      session_start();
      session_destroy();
      unset($_SESSION["uid"]);

      header("Location: ".ROOT);
      exit();
    }

  }
