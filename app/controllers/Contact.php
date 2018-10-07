<?php require_once BASE_URL.'app\models\Mail_model.php';

/**
 * Class Contact
 */
class Contact extends Controller
{
    public function __construct()
    {
        $this->mail = new Mail_model();
    }

    public function form()
    {
        if (!isset($_POST["contact"])) {
            Load::view("contact");
        }
        else
        {
          $this->sendMail();
        }
    }

    /**
     * @param $email string - email from contact form
     * @param $message string - message from contact form
     */
    public function sendMail()
    {
      $data["email"] = "Uw bericht is succesvol verstuurd!";
      Load::view("contact", $data);
      
        $validMail = $this->mail->validateMail(strip_tags($_POST['mail']));
        $validMsg = $this->mail->validateText(strip_tags($_POST['name']));
        $validName = $this->mail->validateText(strip_tags($_POST['message']));

        if ($validMail && $validMsg && $validName == true) {
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            // Additional headers
            $headers[] = 'To: Gameplay-party';
            $headers[] = 'Nieuw bericht van Gameplay-party';

            mail($email, "Nieuw bericht Gameplay-party", $message, $headers);

        }
    }
}
