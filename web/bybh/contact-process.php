<?php

$username = "dbo466179813";
$database = "db466179813";
$password = "shiva2013";
$hostname = "localhost:/tmp/mysql5.sock"; 

$con=mysql_connect($hostname, $username, $password);
// Check connection
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}

$name = $_GET['name'];
$email = $_GET['email'];
$organization = $_GET['organization'];

$send = "<h1>A form was submitted through the BeYouBeHealthy.org website regarding the health repository.</h1>";
$send .= "Name: ".$name."<br/>Email: ".$email."<br/>Organization: ".$organization;
$send .= "<p>This website request originated from <a href='http://www.beyoubehealthy.org/health_data_research.php'>http://www.beyoubehealthy.org/health_data_research.php</a>.<br/></p>";

//$to = 'paul@aqdct.com';
$to      = 'Suzanne.Elder@cityofchicago.org';
$subject = 'BeYouBeHealthy.org Web Request - Health Repository';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'Cc: michael@aqdct.com' . "\r\n";
$headers .= 'From: Health Repository <website@BeYouBeHealthy.org>' . "\r\n" .
    'Reply-To: do-not-reply@BeYouBeHealthy.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $send, $headers);

$sql = "INSERT INTO `db466179813`.`health_matters` VALUES ('$name', '$organization', '$email');";

$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
//echo "Entered data successfully\n";
mysql_close($con);

/* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'health_data_research.php?m=1';
header("Location: http://$host$uri/$extra");

?>