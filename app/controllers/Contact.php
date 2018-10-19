<?php
class Contact extends Controller
{
  /**
  * form() loads the contact view.
  **/
    public function form()
    {
        if (!isset($_POST["contact"])) {
            Load::view("contact");
        } else {
            $data["email"] = "Uw bericht is succesvol verstuurd!";
            Load::view("contact", $data);
            exit();
            // $from = self::sanitize(Url::post("mail"));
            // $msg = self::sanitize(Url::post("message"));
            // $this->sendEmail($from, $msg);
        }
    }

    /**
     * @param $email string - email from contact form
     * @param $message string - message from contact form
     *
     * sendMail() contains the variables with the information to send a email.
     */
    public function sendEmail($from, $msg)
    {
        $to      = 'coding.socializer@gmail.com';
        $subject = 'Contact';
        $message = "<p>test bericht</p>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: no-reply@socializer.com' . "\r\n";
        $headers .= 'Cc: coding.socializer@gmail.com' . "\r\n";
        mail($to, $subject, $message, $headers);
    }
}
