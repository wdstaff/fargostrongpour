<?php header('Location: https://fargostrongpour.com');

// the message
$msg = $_POST['firstname'].' '.$_POST['lastname'].' '.$_POST['email'].' '.$_POST['tel'].' '.$_POST['subject'];

// wordwrap
$msg = wordwrap($msg,70);

// send Email
mail("staff@fargostrongpour.com","Website Message",$msg);
die();

?>
</body>
</html>
