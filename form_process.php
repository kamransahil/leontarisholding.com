<?php
//print_r($_POST);
//die;
$name_error = $email_error = $subject_error = $message_error = "";
$name = $email = $subject = $message = $success = "";

//form is submitted with POST method

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["contactName"]))
    {
        $name_error = "Name is Required";
    }
    else
    {
        $name = test_input($_POST["contactName"]);
        // check if name only contain letters and whitespaces
        if(!preg_match("/^[a-zA-Z]*$/", $name))
        {
            $name_error = "Only letters and white spaces allowed";
        }
    }
    if(empty($_POST["contactEmail"]))
    {
        $email_error = "Email is Required";
    }
    else
    {
        $email = test_input($_POST["contactEmail"]);
        //check if e-mail address is well-formed
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $email_error = "Invalid email format";
            
        }
    }
    if(empty($_POST["contactSubject"]))
    {
        $subject_error = "Subject is Required";
    }
    else
    {
        $subject = test_input($_POST["contactName"]);
    }

if(empty($_POST["contactMessage"]))
    {
        $message_error = "Message is Required";
    }
    else
    {
        $message = test_input($_POST["contactMessage"]);
    }
    
    if($name_error == '' and $email_error == '' and $subject_error == '' and $message_error == '')
    {
        $message_body = '';
        unset($_POST['submit']);
        foreach($_POST as $key=> $value)
        {
            $message_body .= "Name: $name\nEmail: $email\nMessage:\n$message";
        }
        $to = 'leontarisholding@gmail.com';
        $headers = 'MIME-version: 1.0' . "\r\n";
        $headers = 'From: your name <sahil.sk915@gmail.com>' . "\r\n";
        $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        if(mail($to, $subject, $message, "From: $email"))
        {
            $success = "Thank you for your message! We will get back to you as soon as possible.";
            $name = $email = $subject = $message = '';
        }
    }
    
    }
    
    
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
//    echo $name;

?>

<!--for phone validation
if(!preg_match("/^d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone))
        {
            $phone_error = "Invalid phone number";
        }-->
<!--for url validation
if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&#\/%?=~_|!:,.;]*[-a-z0-9+&@#=~_|]/i", $url))
        {
            $url_error = "Invalid url number";
        }-->