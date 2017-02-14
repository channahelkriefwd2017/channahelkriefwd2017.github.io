<?
$name = trim(stripslashes($_POST['your_name']));
$email = trim(stripslashes($_POST['your_email']));
$message = trim(stripslashes($_POST['your_message']));

$recipient = "channahelkrief@gmail.com";
$email_from = $name." <"$email">";

$body = "Name: ".$name;
$body .= "\nEmail: "
$body .= "\nMessage: ".$message;

$success=mail($recipient, "message from sitename", $body, "from: ".$email_from);

if($success){
echo "Message sent!";
}else{
    echo "didn't work";
}

?>