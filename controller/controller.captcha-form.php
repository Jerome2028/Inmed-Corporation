<?php
require 'sender.php';
$ip = "Not Set";
if (isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']) {
    $ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
}
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'none';

switch ($mode) {

case 'stay':
    $fields = array('ic_user','');
    foreach ( $fields as $field ) {
        if(!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            echo 'Please fill up all required field';
            die();
}
${$field} = htmlentities($_POST[$field]);

    }
    if ($ic_email == "") {
        echo "Uh oh, captcha was incorrect!";
        die();
    }
    echo "Action Complete";
    die();

    break;

case 'repair':
    $fields = array('ic_email', 'ic_email_confirm','ic_captcha','input_captcha');
    foreach ( $fields as $field ) {
        if(!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            echo 'Please fill up all required field';
            die();
}
    ${$field} = htmlentities($_POST[$field]);

    }

    if ($ic_email !== $ic_email_confirm) {
        echo "Uh oh, email confirmation does not match!";
        die();
    }
    
    if ($ic_captcha !== $input_captcha) {
        echo "Uh oh, captcha was incorrect!";
        die();
    }

    $authorized_persons = (isset($_POST['ic_person_two']) && !empty($_POST['ic_person_two'])) ? $ic_person_one . ' and ' . htmlentities($_POST['ic_person_two']) : $ic_person_one;

    require "template/appointment.php";

    $mail->Subject = 'New Pickup Appointment';
    // $mail->AddAddress("appointment@inmed.com.ph");
    $mail->AddAddress("didingbeauty@gmail.com");
    // $mail->AddCC('rab@inmed.com.ph');
    // $mail->AddCC('sca@inmed.com.ph');
    $mail->Body = $htmlMessage;

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        die();
    }

    echo "Action Complete";
    die();

    break;

    case 'visitors':
        $required = array('ic_email', 'ic_email_confirm','ic_captcha','input_captcha');
        foreach ( $required as $field ) {
            if( !isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                echo 'Please fill up all required field';
                die();
    }
    ${$field} = htmlentities($_POST[$field]);
        }
        if ($ic_email !== $ic_email_confirm) {
            echo "Uh oh, email confirmation does not match!";
            die();
        }
        if ($ic_captcha !== $input_captcha) {
            echo "Uh oh, captcha was incorrect!";
            die();
        }
        echo "Action Complete";
        die();

        break;
        
    case 'warranty':
        $registration = array('ic_email', 'ic_email_confirm','ic_captcha','input_captcha');
        foreach ( $registration as $field ) {
            if( !isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                echo 'Please fill up all required field';
                die();
    }
    ${$field} = htmlentities($_POST[$field]);
        }
        if ($ic_email !== $ic_email_confirm) {
            echo "Uh oh, email confirmation does not match!";
            die();
        }
        
        if ($ic_captcha !== $input_captcha) {
            echo "Uh oh, captcha was incorrect!";
            die();
        }
        echo "Action Complete";
        die();
        break;
}
?>