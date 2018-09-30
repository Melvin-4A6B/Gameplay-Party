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

    public function bla()
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
            $headers = array(
                'From' => 'Gameplay-party@example.com',
                'Reply-To' => 'Gameplay-party@example.com',
                'X-Mailer' => 'PHP/' . phpversion()
            );

            mail($email, "Nieuw bericht Gameplay-party", $message, $headers);
        }
    }
}