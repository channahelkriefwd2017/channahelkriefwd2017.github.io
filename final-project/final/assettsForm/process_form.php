<?
$name = trim(stripslashes($_POST['your_name']));
$email = trim(stripslashes($_POST['your_email']));
$phone = trim(stripslashes($_POST['your_phone']));
$subject = trim(stripslashes($_POST['your_subject']));
$message = trim(stripslashes($_POST['your_message']));
//var_dump($_POST['contact_options']);

$recipient = "qwertsy2@gmail.com";
$email_from = $name." <".$email.">";

$body = "Name: ".$name;
$body .= "\nEmail: ".$email;
$body .= "\nPhone Number: ".$phone;
$body .= "\nSubject: ".$subject;
$body .= "\n    Message: ".$message;

$success = mail($recipient, "message from sitename site", $body, "From: ".$email_from);

if ($success){
    echo "message sent!";
}else{
    echo "didn't work";
}
?>
