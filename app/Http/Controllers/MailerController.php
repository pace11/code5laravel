<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerController extends Controller
{
    public function sentMail($name,$id_reg,$email,$phone,$typeops,$desc_ta,$desc_method,$org,$desc_apps,$school,$campus,$nim)
    {
        $mail = new PHPMailer(true);
        try {

            $abx = 'Y29kZWZpdmU2NUBnbWFpbC5jb20=';
            $bxx = 'UGFjZTE5OTY=';

            $mail->isSMTP();                                      
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;                               
            $mail->Username = base64_decode($abx);                 
            $mail->Password = base64_decode($bxx);                           
            $mail->SMTPSecure = 'tls';                            
            $mail->Port = 587;                                    

            //Recipients
            $mail->setFrom(base64_decode($abx), 'Code5');
            $mail->AddAddress($email,$name);
            
            $mail->addAttachment('img/pamflet.jpg', 'pamfletcode5.jpg');

            //Content
            $mail->isHTML(true);
            $mail->AddEmbeddedImage('img/email_header.png', 'gg');
            $mail->AddEmbeddedImage('img/mono-putih.png', 'logo');
            $mail->AddEmbeddedImage('img/mono.png', 'mono');
            $mail->AddEmbeddedImage('img/wa-icon.png', 'wa');
            $mail->AddEmbeddedImage('img/email-icon.png', 'email');
            $bodyContent = "<div style='background-color:#ffffff;margin:auto;width:80%;border:20px solid #e8e8e8;'>";
            $bodyContent .= "<div style='background-color:#f05f40;height:70px;padding:7px;overflow:hidden;'>";
            $bodyContent .= "<img style='float:left;margin:5px;' src='cid:logo' width='20%'><img style='float:right;margin:5px;' src='cid:gg' width='50%'><br/>";
            $bodyContent .= "</div>";
            $bodyContent .= "<div style='padding:10px;'>";
            $bodyContent .= "<p>Terima kasih sdra/i <b>$name</b> telah mendaftar di Code5. Data anda telah kami terima. Berikut adalah data diri anda :</p>";
            $bodyContent .= "<table border='0' cellspacing='0' style='margin-left:20px;'>";
            $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Id Registrasi</b></td><td>: $id_reg</td></tr>";
            $bodyContent .= "<tr><td><b>Nama Lengkap</b></td><td>: $name</td></tr>";
            $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Email</b></td><td>: $email</td></tr>";
            $bodyContent .= "<tr><td><b>No Telp</b></td><td>: $phone</td></tr>";
            $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Tipe</b></td><td>: $typeops</td></tr>";
            if (!empty($org)) $bodyContent .= "<tr><td><b>Organisasi/Kantor</b></td><td>: $org</td></tr>";
            if (!empty($school)) $bodyContent .= "<tr><td><b>Asal Sekolah</b></td><td>: $school</td></tr>";
            if (!empty($campus)) $bodyContent .= "<tr><td><b>Asal Kampus</b></td><td>: $campus</td></tr>";
            if (!empty($nim)) $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Nim</b></td><td>: $nim</td></tr>";
            if (!empty($desc_apps)) $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Deskripsi Aplikasi</b></td><td>: $desc_apps</td></tr>";
            if (!empty($desc_ta)) $bodyContent .= "<tr><td><b>Deskripsi TA</b></td><td>: $desc_ta</td></tr>";
            if (!empty($desc_method)) $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Deskripsi Metode</b></td><td>: $desc_method</td></tr>";
            $bodyContent .= "</table></div>";
            $bodyContent .= "<div style='background-color:#f2f2f2;height:110px;padding:10px;margin-top:10px;'>";
            $bodyContent .= "<div style='margin-bottom:-5px;'><img style='margin:auto;display:block;'src='cid:mono' width='100'></div>";
            $bodyContent .= "<div style='color:#d2d2d2;text-align:center;'><p>Code5, DKI Jakarta, Indonesia</p></div>";
            $bodyContent .= "<div style='display:table;margin:0 auto;'><a style='margin-right:5px;' href='tel:+6282248080870'><img src='cid:wa' width='30'></a> <a href='mailto:codefive65@gmail.com'><img src='cid:email' width='30'></a></div>";
            $bodyContent .= "</div></div>";
            $mail->Subject = '[Registrasi | Code5]';
            $mail->Body    = $bodyContent;

            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        
    }
}
