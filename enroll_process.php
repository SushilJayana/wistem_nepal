<?php

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["contact"])
&& isset($_POST["address"]) && isset($_POST["enroll_type"])  && isset($_POST["message"])){
    try{
            require './PHPMailer/src/Exception.php';
            require './PHPMailer/src/PHPMailer.php';
            require './PHPMailer/src/SMTP.php';

            $name= htmlspecialchars($_POST["name"],ENT_QUOTES);
            $email= htmlspecialchars($_POST["email"],ENT_QUOTES);
            $contact= htmlspecialchars($_POST["contact"],ENT_QUOTES);
            $address= htmlspecialchars($_POST["address"],ENT_QUOTES);
            $enroll_type= htmlspecialchars($_POST["enroll_type"],ENT_QUOTES);
            $message= htmlspecialchars($_POST["message"],ENT_QUOTES);

            $mail = new \PHPMailer\PHPMailer\PHPMailer();
            $mail->SMTPDebug = false;
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = "wistemnepal.org";
            $mail->SMTPAuth = true;
            $mail->Username = 'enrollment@wistemnepal.org';
            $mail->Password = 'info!de@00';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;


            $mail->setFrom('enrollment@wistemnepal.org');

            
           $mail->addAddress('hovner.szl@gmail.com');
           //$mail->addAddress('binita.bbshrestha@gmail.com');
          //  $mail->addAddress('smart.cheli@wistemnepal.org');


            $mail->isHTML(true);
            $mail->Subject = 'WISTEM : ENROLLMENT';


            $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><head><style>
            table {border-collapse: collapse;} table, td, th {border: 1px solid black;}
            </style></head><body>";
            $body .="<h3>Enrollment</h3>";
            $body .= "<table>";
            $body .= "<tr><td><strong>Name: </strong> {$name}</td></tr>";
            $body .= "<tr><td><strong>Email: </strong> {$email}</td></tr>";
            $body .= "<tr><td><strong>Contact: </strong> {$contact}</td></tr>";
            $body .= "<tr><td><strong>Address: </strong> {$address}</td></tr>";
            $body .= "<tr><td><strong>Enrollment Type: </strong> {$enroll_type}</td></tr>";
            $body .= "<tr><td><strong>Message: </strong> {$message}</td></tr>";
            $body .= "</tbody></table>";
            $body .= "</body></html>";

            $mail->Body = $body;

            if(!$mail->send()) 
            {
           // echo "Mailer Error: " . $mail->ErrorInfo;
            $response = new stdClass();
            $response->message ="error";
            echo json_encode($response);
            } 
            else 
            {
            
                $response = new stdClass();
                $response->message ="success";
                echo json_encode($response);
            }

    }catch(Exception $e){
        $response = new stdClass();
        $response->message ="error";
        echo json_encode($response);
    }
}

  

   

