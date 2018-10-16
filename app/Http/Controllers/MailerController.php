<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerController extends Controller
{
    public function sentMail($name,$id_reg,$email,$phone,$typeops,$desc_ta,$desc_method){

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();                                      
            $mail->Host = env("MAIL_HOST");  
            $mail->SMTPAuth = true;                               
            $mail->Username = env("MAIL_USERNAME");                 
            $mail->Password = env("MAIL_PASSWORD");                           
            $mail->SMTPSecure = 'tls';                            
            $mail->Port = env("MAIL_PORT");                                    

            //Recipients
            $mail->setFrom(env("MAIL_USERNAME"), 'Code5');
            $mail->AddAddress("ryanjoker87@gmail.com", "Muh Iriansyah");

            //Content
            $mail->isHTML(true);
            $mail->AddEmbeddedImage('img/email_header.png', 'gg');
            $mail->AddEmbeddedImage('img/LOGO.png', 'foot');
            $bodyContent = "<img src='cid:gg' width='300'><br/>";
            $bodyContent .= "<p>Terima kasih sdra/i <b>$name</b> telah mendaftar di Code5. Data anda telah kami terima. Berikut adalah data diri anda :</p>";
            $bodyContent .= "<table style='margin-left:20px;'>";
            $bodyContent .= "<tr><td><b>Id Registrasi</b></td><td>: $id_reg</td></tr>";
            $bodyContent .= "<tr><td><b>Nama Lengkap</b></td><td>: $name</td></tr>";
            $bodyContent .= "<tr><td><b>Email</b></td><td>: $email</td></tr>";
            $bodyContent .= "<tr><td><b>No Telp</b></td><td>: $phone</td></tr>";
            $bodyContent .= "<tr><td><b>Tipe</b></td><td>: $typeops</td></tr>";
            $bodyContent .= "<tr><td><b>Deskripsi TA</b></td><td>: $desc_ta</td></tr>";
            $bodyContent .= "<tr><td><b>Deskripsi Metode</b></td><td>: $desc_method</td></tr>";
            $bodyContent .= "</table>";
            $bodyContent .= "<p>Untuk Informasi bisa menghubungi kami via telp <b>082248080870</b> atau via Website kami di <a href='https://www.pacegege.com'>CODE5</a></p>";
            $bodyContent .= "<img src='cid:foot' width='150'><br/>";
            $mail->Subject = '[Registrasi | Code5]';
            $mail->Body    = $bodyContent;

            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        
    }
}
