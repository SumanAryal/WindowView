<?php
if (isset(&_POST["submit"])){
    $name =$_POST["name"];
    $lastname =$_POST["Lastname"];
    $number =$_POST["Contact"];
    $subject =$_POST["Subject"];
    $mailFrom =$_POST["Email"];
    $message =$_POST["Paragraph"];

$mailTo = "info@windowviewtravel.com";
$headers = "From: ".$mailFrom;
$txt = "You Have Received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

<?php
$name = $_POST["Name"]
$visitor_email = $_POST["Email"]
$message = $_POST["Paragraph"]

$email_from = "info@windowviewtravel.com";

$email_subject= "New Form Submission";
$email_body = "User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message.\n";

        $to = "aryal.suman95@gmail.com";
        $headers = "From: "
?>

