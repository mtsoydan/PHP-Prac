<?php 
$str ="<h1> Hello Word </h1>";
$new_str = filter_var($str,FILTER_SANITIZE_STRING);
echo $new_str;


?>

<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>


<?php 
$ip = "127.0.0.1";

if(!filter_var($ip,FILTER_VALIDATE_IP)=== false   )
{
echo "$ip is a valid ip adress";
}
else{
    echo "$ ip is not valid ip adress";
}

?>


<?php
echo "<br> <br>";


$email = "mustafataha.soydanğç^3@g-mail.com";

$email = filter_var($email,FILTER_SANITIZE_EMAIL);
echo $email;
//validate e mail


if (!filter_var($email,FILTER_SANITIZE_EMAIL)===False) {
    echo " e mail is a valid";
}
else {
    echo "e mail is a not valid :" ;

}



?>


<?php
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?>

<?php
$int = 122;
$min = 1;
$max = 200;


if (filter_var($int,FILTER_VALIDATE_INT,array("optios"=>array("min_range" =>$min,"max_range"=>$max)))===false) {

echo "variable is sınır içide";
}
?>