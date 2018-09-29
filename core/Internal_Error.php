<?php
  class Internal_Error extends Controller {

    public static function show($type)
    {
      $data["error"] = $type;
      Load::view("errors/{$type}", $data);
    }

  }
