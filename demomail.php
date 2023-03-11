<?php
    require_once('MyEmailServer.php');
    require_once('Emailsender.php');
    $emailServer = new MyEmailServer();
    $emailSender = new EmailSender($emailServer);
    $emailSender->send("chanhnpyxiao@gmail.com", "Test Email", "M nợ t một bữa gà chiên. T mong m sẽ sớm trả nợ. Ký tên: Bé Chanh");

?>