<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $services = $_POST['services'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "rayazand@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You got an email from ".$name.".\n\n".$message;

        mail($mailTo, $services, $txt, $headers);
        header("Location: index.html?mailsend");
    }

>