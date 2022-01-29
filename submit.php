<?php 
if($_POST['NovelName']){
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $NovelName = $_POST['NovelName'];

    // the message
    $msg = "Email: $email\n Mobile: $mobile\n Address: $address \n NovelName: $NovelName";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("yasir@vfairs.com","New Order Of Novel".$NovelName, $msg);
}

?>