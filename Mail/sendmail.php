<?php
require 'smtp/PHPMailerAutoload.php';

class SendMail
{
    public $SenderEmail = "hitixa.bhuva@uniqueconsumerservices.com";
    public $SenderEmailPassword = "1f1UOc{3U*64";
    public $ReciverEmail = "patelhitixa4439@gmail.com";
    public $Subject = "";
    public $Body = "";

    public function sendMail()
    {
        $mail = new PHPMailer();
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = "216.10.241.228";
        $mail->Port = 587;
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = $this->SenderEmail;
        $mail->Password = $this->SenderEmailPassword;
        $mail->setFrom($this->SenderEmail, 'Unique Consumer Services');
        $mail->addAddress($this->ReciverEmail);
        $mail->Subject = $this->Subject;
        $mail->Body = $this->Body;

        // Optional: Configure SSL options
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ];

        try {
            if (!$mail->send()) {
                echo json_encode([
                    'status' => false,
                    'message' => ' Mail not sent.',
                    'error' => $mail->ErrorInfo,
                ]);
            } else {
                echo json_encode([
                    'status' => true,
                    'message' => 'Mail sent successfully.',
                ]);
            }
        } catch (Exception $e) {
            echo json_encode([
                'status' => false,
                'message' => 'Mailer exception.',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
