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
        if (!Url::post("contact")) {
            Load::view("contact");
        }
    }

    /**
     * @param $email string - email from contact form
     * @param $message string - message from contact form
     */
    public function sendMail()
    {
        $validMail = $this->mail->validateMail($_POST['mail']);
        $validMsg = $this->mail->validateText($_POST['name']);
        $validName = $this->mail->validateText($_POST['message']);

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