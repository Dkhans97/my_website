<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "dawkhan97@dawoodskhan.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = $message;

    mail($mailTo, $telephone, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>