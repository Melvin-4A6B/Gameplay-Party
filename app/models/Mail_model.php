<?php
/**
 * Created by PhpStorm.
 * User: kaani
 * Date: 26-9-2018
 * Time: 19:43
 */

/**
 * Class Mail_model
 */
class Mail_model
{
    /**
     * @param $email
     * @return bool
     */
    public function validateMail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           return true;
        }
    }

    public function validateText($input) {
        if (!preg_match("/^[a-zA-Z ]*$/", $input))
        {
            return true;
        }
    }
}