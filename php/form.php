<?php
    if($_POST){
        $to = "juanjelopezdj@gmail.com";
        $subject = "";
        $email = "";
        $message = "";
    
        if(isset($_POST['name'])){
            $subject = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        }
    
        if(isset($_POST['email'])){
            $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        }
    
        if(isset($_POST['message'])){
            $message = htmlspecialchars($_POST['message']);
        }
        
        $headers = 'MIME-Version: 1.0' . "\r\n"
        .'Content-Type: text/html; charset=utf-8' . "\r\n"
        .'FROM: ' . $email . "\r\n";
        
        
        if(mail($to, $subject, $message, $headers)){
            echo "<script language='javascript'>
            alert('¡Chachi! Los nanobots me están trayendo el mensaje.');
            window.location.href = 'https://portfoliojjlf.000webhostapp.com/';
            </script>";
        }else{
            echo 'cago en to';
        }
    }else{
        echo '<p>Me da que algo no anda bien... :\ </p>';
    }
    