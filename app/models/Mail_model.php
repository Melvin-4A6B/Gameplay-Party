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
     * @param $email string | mail to be validated
     * @return bool | return false if $email is not correct
     */
    public function validateMail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           return false;
        } else {
            return true;
        }
    }

    /**
     * @param $input string | text to validate
     * @return bool | return false if preg match not matches
     */
    public function validateText($input) {
        if (!preg_match("/^[a-zA-Z ]*$/", $input))
        {
            return false;
        } else {
            return true;
        }
    }
}