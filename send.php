<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$web=$_POST['web'];
$message=$_POST['message'];

$to="nadyahzm@gmail.com";

$message="Dear, <br /> <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From:'.$name.' <'.$email.'>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: admin@email.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if (@mail) { ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the message haha. We will contact you shortly.');
window.location = 'contact.php';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
alert('Message failed. Please, send an email to xxxx@email.co.id');
window.location = 'contact.php';
</script>
<?php
}
?>