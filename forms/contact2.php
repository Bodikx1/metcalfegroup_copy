<?php 
$first_name = "Имя: ".htmlspecialchars($_POST["first_name"]);
$last_name = "Фамилия: ".htmlspecialchars($_POST["last_name"]);
$user_company = "Компания: ".htmlspecialchars($_POST["company"]);
$title = "Title: ".htmlspecialchars($_POST["title"]);
$street_address = "Street Address: ".htmlspecialchars($_POST["street_address"]);
$address_line_2 = "Address Line 2: ".htmlspecialchars($_POST["address_line_2"]);
$city = "City: ".htmlspecialchars($_POST["city"]);
$state = "State / Province / Region: ".htmlspecialchars($_POST["state"]);
$zip = "ZIP / Postal Code: ".htmlspecialchars($_POST["zip"]);
$country = "Country: ".htmlspecialchars($_POST["country"]);
$user_email = "Email: ".htmlspecialchars($_POST["email"]);
$user_phone = "Телефон: ".htmlspecialchars($_POST["phone"]);
$extension = "Extension: ".htmlspecialchars($_POST["extension"]);
$research = htmlspecialchars($_POST["research"]);
if($research) {
	$research .= '<br/>';
}
$design = htmlspecialchars($_POST["design"]);
if($design) {
	$design .= '<br/>';
}
$engineering = htmlspecialchars($_POST["engineering"]);
if($engineering) {
	$engineering .= '<br/>';
}
$prototyping = htmlspecialchars($_POST["prototyping"]);
if($prototyping) {
	$prototyping .= '<br/>';
}
$testing = htmlspecialchars($_POST["testing"]);
if($testing) {
	$testing .= '<br/>';
}
$other = htmlspecialchars($_POST["other"]);
if($other) {
	$other .= '<br/>';
}
$general_inquiry = htmlspecialchars($_POST["general_inquiry"]);
if($general_inquiry) {
	$general_inquiry .= '<br/>';
}
$hear = "How did you hear of us: ".htmlspecialchars($_POST["hear"]);
$user_message = "Сообщение: ".htmlspecialchars($_POST["message"]);
$receive = htmlspecialchars($_POST["receive"]);


$source = $first_name."<br/>".$last_name."<br/>".$user_company."<br/>".$title."<br/>".$street_address."<br/>".$address_line_2."<br/>".$city."<br/>".$state."<br/>".$zip."<br/>".$country."<br/>".$user_email."<br/>".$user_phone."<br/>".$extension."<br/>Service Inquiry:<br/>".$research.$design.$engineering.$prototyping.$testing.$other.$general_inquiry.$hear."<br/>".$user_message."<br/>".$receive;

$headers= "MIME-Version: 1.0\r\n";

echo $source;


$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$result = mail('dimanhim@list.ru', $btn, $source, $headers);
 
 ?>