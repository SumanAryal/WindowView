
<?php
if(isset($_POST['submit'])){
    $to = "info@windowviewtravel.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
   $Traveller = $_POST["Traveller"];
    $number =$_POST["Contact"];
    $Ddate =$_POST["Ddate"];
    $Rdate =$_POST["Rdate"];
    $subject =$_POST["Subject"];
    $subject1 = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "Yo Got A New Mail From :  " . $Name .  "\n\n ". "Phone Number:"." ". $number ."\n\n ". "Departure Date: :"." ". $Ddate ."\n\n ". "Subject:"." ". $subject ."\n\n ". "Return Date: :"." ". $Rdate ."\n\n ". "Number Of Travellers:"." ". $Traveller ."\n\n ". "Message:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $Name .  "\n\n ". "Phone Number:"." ". $number ."\n\n ". "Departure Date: :"." ". $Ddate ."\n\n ". "Subject:"." ". $subject ."\n\n ". "Return Date: :"." ". $Rdate ."\n\n ". "Number Of Travellers:"." ". $Traveller ."\n\n ". "Message:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<script type="text/javascript">'; 
echo 'alert("Thankyou For Booking. We Will Contact You Soon. :)");'; 
echo 'window.location.href = "service.html";';
echo '</script>';
//     echo '<script language="javascript">';
// echo 'alert("Thankyou For Your Message. We Will Contact You Soon. :) ")';
// echo '</script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>