<?php
 /*$to = "nadir.jafri90@gmail.com";
 $subject = $_POST['subject'];
 $body = "From, ".$_POST['name']."\n\n"."Email, ".$_POST['email']."\n\n".$_POST['message'];
 if (mail($to, $subject, $body)) {
  $responseArray = array('class' => 'alert alert-success', 'message' => 'Message sent successfully. Thank you, will get back to you soon!');
  } else {
$responseArray = array('class' => 'alert alert-danger', 'message' => 'There was an error while submitting the form. Please try again later.');
     
  }

    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
*/
require_once 'baglan.php';

$sql = "INSERT INTO contact (Tarih, Ad, SoyAd, Telefon, Email, Mesaj ) VALUES(:Tarih, :Ad, :Soyad, :Telefon, :Email, :Mesaj)";

    $result = $db->prepare($sql);

<<<<<<< HEAD
    if($result->execute(
=======
    $result->execute(
>>>>>>> 3f31674139a093b0f108c995d6c20c60fd24f028
        [
            'Tarih' => date("Y-m-d H:i:s"),
            'Ad' => $_POST['Ad'],
            'Soyad' => $_POST['SoyAd'],
            'Telefon' => $_POST['Telefon'],
            'Email' => $_POST['Email'],
            'Mesaj' => $_POST['Messages']
        ]
<<<<<<< HEAD
    ))
    {
      $responseArray = array('class' => 'alert alert-success', 'message' => 'Mesajınız başarıyla gönderildi.');
    }
    else{
      $responseArray = array('class' => 'alert alert-danger', 'message' => 'Mesaj gönderilirken hata oluştu.');
    }
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
=======
    );
>>>>>>> 3f31674139a093b0f108c995d6c20c60fd24f028
 ?>