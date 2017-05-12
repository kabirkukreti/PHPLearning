<?php
$email = "kabir@kukreti.in";
print "Email: ".$email."<br/>";
$delimiter = "@";
$email_arr = explode($delimiter, $email);
print "User id: " . $email_arr[0]."<br/>";
print "Email id: ".$email_arr[1]."<br/>";
?>



