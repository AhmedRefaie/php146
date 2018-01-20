<?php

echo 'Hello Programing'; /*to print stuff on screen and you can use print too*/


phpinfo();/*info about your php*/




echo '<strong>Na3san ya fa5ry.</strong>';/* for more strong text*/



echo "<input type='text' name='name' value='Refaie'>";/*take care single couts inside big outside and viseversa*/



<?php
$ref = 'Ahmed Refaie';
?>
/*mixing php with html */
<input type='text' name='name' value='<?php echo $ref; ?>'>




echo $Ref = 'Refaie el Dso2y.';
echo $number = 100;
/*var and php awsome izi print */
echo $Ref;
echo $number;



echo 'the date is <strong>'.$day.' '.$date.' '.$year.'</strong>';/* hard way to join text*/



echo "the date is $day $date $year";/* lazy ezi way*/



if(1){
	echo 'TRUE.';	
}else {
	echo 'False.';
}/*1 is automatic true 0 is automatic false*/



$text ='Sometihng';

if($text=='Sometihng'){
	echo 'TRUE.';	
}else {
	echo 'False.';
}/*text for sure also*/





$number = 13;

if($number==10){
	echo'Equal to ten.';
}else if ($number==11){
	echo 'Equal to elevn.';
}else{
	echo'WTF is this number';
}/*if else stamten to make more condition or allowance*/




$number1 = 10;

$number1 +-*/%= 2;

echo $number1;/*Assignment Operations*/



$text = 'Hello';

$text .= ' Refaie.';
/* more ass operators */
echo $text




$num =654;

$upper =1000;
$lower =500;

if ($num<=$upper and $num>=$lower) {
	echo "Sha3'al";
}else {
	echo 'Batal le3b ya baba';
}/* and statment && or and */



$num =2;

$can1 = 2;
$can2 = 4;

if($num==$can1 || $num==$can2){
	echo 'True.';
}/* Or statment can use || or or lol */




$num1= '1';
$num2 = 1;

if($num1===$num2){
	echo'Equal.';
}else {
	echo 'Not Equal.';
}/* Trible equal it compers also the deep stuff */



$counter = 1;

while($counter<=10){
	echo $counter. ' Hello<br>';
	$counter ++;
}/* While loop */




$counter = 13;

do{
	echo 'This will Always show Once.<br>';
	$counter++;
}while($counter<=10)/* do while loop run code atleast once */




for($count= 1; $count <=10; $count++) {
	echo $count.' Kolo Bel FLOOOS $$<br>';
}/* for loop izi squzi to read and control */



$num = 5;

switch ($num) {
	case 1:	
		echo 'One';
	break;
	
	case 2:
		echo 'Two';
	break;
	
	case 3:
		echo 'Three';
	break;
	
	default: 
		echo 'Number Not found';
	break;
}/* switch statment */



$day = 'Monday';

switch ($day) {
	case 'Saturday':	
	case 'Sunday';
		echo 'It\'s a weekend';
	break;
	
	default :
		echo 'Not weekend';
}/* locate your weekend */



echo 'Hello ';

die('Error. Page has Ended');
/* can use also (exit) kills rest of code */
echo ' Programing';
	


function myName() {
	echo 'Refaie';
}

echo 'My name is ';
myName(); /* functions*/



$inum1 = 10;
$inum2 = 12;

function add($num1, $num2){
	echo $num1 + $num2 ;
}
add($inum1, $inum2);/* function app*/




function displayDate($day , $date, $year){
	echo $day.' '.$date.' '.$year;
}
/* more function app */
displayDate('Friday', 15, 2017)



function add($num1, $num2) {
	$result = $num1 + $num2;
	return $result;
}

function divide($num1, $num2){
	$result = $num1 / $num2 ;
	return $result;
}
/* return statment app */
echo $sum = divide(add(10, 10), add(5, 5))



$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip(){
	global $user_ip;
	$string = 'Your ip adress is '.$user_ip;
	echo $string;
}
/* global and functions*/
echo_ip();



$string = 'Messy wessy & kessy .';
$string_word_count = str_word_count($string, 1, '&.');
/* string functions*/
print_r ($string_word_count);



$string = 'abcdefg123456';
$string_shuffled = str_shuffle($string);
/* random charcter generation */
echo $string_shuffled;



$string = 'abcdefg123456';
$string_reversed = strrev($string);

echo $string_reversed;/*reverse function*/




$string1 = 'This is my essay iam going to tlak about php.';
$string2 = 'This is myessay i will be tlking about the php world';

similar_text($string1, $string2, $result);
echo 'The similarty Between them is:'.$result;
/* A compare of percntage of text similarity*/



$string = 'Our Lovely example';
$string_length = strlen($string);

echo $string_length;/* length you know*/



$string = ' rr       Our Lovely example      rr '; 
$string_trimmed= trim($string);

echo $string_trimmed;/* cuts the spaces all */



$food = array('Pizza', 'Meat', 'Chicken', 'Pasta');

$food[4]='Fruit';

print_r($food);/* arraaaaaaay yay woop haahah rick style */




$food = array('Pizza'=>500, 'Meat'=>200, 'Chicken'=>250, 'Pasta'=>400);

echo $food['Pizza'];/* Associative arrays*/



/*
Healthy
Meat
Chicken

UnHealthy
Pasta
Pizza 
*/


$food = array('Healthy'=>
array('Meat', 'Chicken') ,
'UnHealthy'=>
array('Pizza', 'Pasta'));

echo $food ['Healthy'][1];/* multi dimintion for arrays */



$food = array('Healthy'=>
	array('Meat', 'Chicken') ,
'UnHealthy'=>
	array('Pizza', 'Pasta'));
	
foreach($food as $element => $inner_array){
	echo '<strong>'.$element.'</strong><br>';
	foreach($inner_array as $item){
		echo $item.'<br>';
	}
}/* using foreach to print array items*/



include "PHPExtra.php";

$var = 'String';

echo $var;/* incudeing other files*/



include "PHPExtra.php";

echo $var1; /* the var1 is defined in the include file*/



require 'PHPExtra.php';
require_once 'PHPExtra.php';/* once means once lol include i time only */



$string = 'This is a string.';

if(preg_match('/ /', $string)){
	echo 'Match found.';
}else{
	echo 'No match found.';	
}/* checks for specific stuff in the strigs*/




$string = 'This Dosent Have Space';

function has_space($string){
	if(preg_match('/ /', $string)){
		return true;
	}else {
		return false;
	}
}

if(has_space($string)){
	echo 'Have one space at least';
}else{
	echo "Dosen't have space";
}/* preg_match apps means application not any apps*/



$string = 'Refaie';

$string_length = strlen($string);

for($x=1;$x<=$string_length;$x++){
	echo $x.'<br>';
}/* looping thro a string*/



$string = 'I could be any cAse.';

$string_lower = strtolower ($string);
$string_upper = strtoupper ($string);

echo $string_lower.'<br>';
echo $string_upper;/* upper and lower case control */



<?php

if(isset($_GET['user_name'])&&!empty($_GET['user_name'])){
	$user_name = $_GET['user_name'];
	$user_name_lc = strtolower($user_name);
	
	if($user_name_lc=='refaie'){
		echo 'Your cool,'. $user_name;
	}
}
?>

<form action="PHP.php" method="GET">
	Name: <input type="Text" name="user_name"><br><br>
	<input type="submit" value = "Submit!">
</form> /*upper and lower apps*/



$offset = 0;

$find = 'We';
$find_length = strlen($find);

$string = 'Anaaa Haweeet We 2ntaheet We leeh Ba2aa.';


while($string_position = strpos($string, $find, $offset)){
	echo '<strong>'.$find.'</strong> found at '.$string_position.'<br>';
	$offset = $string_position + $find_length;
}/* apps for string position */ 




substr();
str_replace();

substr_replace();/* is a compnation between those 2 actions */



$string = 'This part don\'t search. This part search.';
$string_new = substr_replace($string, 'Ref', 29, 4);

echo $string_new;/* ssr example*/



$find = array('Cow','Now','Brown');
$replace = array('Dragon','Law','Black');

$string = 'Hey Now Brown Cow.';

$string_new = str_replace($find, $replace, $string);
echo $string_new ;/* str example replace */




<?php

$find = array('fuck','shit', 'ass');
$replace = array('F***', 'S***', 'A**');

if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
	$user_input = $_POST['user_input'];
	$user_input_new = str_ireplace($find, $replace, $user_input);
	
	echo $user_input_new;
}
/* example app for compining to prevent some words*/
?>

<hr>

<form action="PHP.php" method="POST">
	<textarea name="user_input" rows="7" cols="30"><?php echo $user_input; ?></textarea><br><br>
	<input type="submit" value="Submit">
</form>







<?php
$offset= 0;

if (isset($_POST['text'])&&isset($_POST['Searchfor'])&&isset($_POST['replacewith'])){
	$text = $_POST['text'];
	$search = $_POST['Searchfor'];
	$replace = $_POST['replacewith'];
	if(!empty($text)&&!empty($search)&&!empty($replace)){
	
	$search_length = strlen($search);
	
		while ($strpos = strpos($text, $search, $offset)) {
			$offset = $strpos + $search_length;
			$text = substr_replace($text, $replace, $strpos, $search_length);
		}
		
		echo $text;

	}else{
		echo 'Please fill in all gaps';
	}
}

?>

<form action="PHP.php" method="POST">
	<textarea name="text" rows="6" cols="30"></textarea><br><br>
	Search for:<br>
	<input type="text" name="Searchfor"><br><br>
	Replace with:<br>
	<input type="text" name="replacewith"><br><br>
	<input type="submit" value="Find and Replace">
</form>/* awsome replace program*/



$time = time();
$actual_time = date('D M Y @ H:i:s',$time);/* D M Y or d m y */

echo 'The current date & time is: '.$actual_time;
/*time stamps example */




$time = time();
$time_now = date('D M Y @ H:i:s',$time);
$time_edited = date('D M Y @ H:i:s', strtotime('+1 year 3 week 2 hours 20 seconds'));

echo $time_now.'<br>';
echo $time_edited; /* modifying time stamps */




<?php

if (isset($_POST['roll'])){
	$rand = rand(1, 6);
	echo 'You rolled a '.$rand;
}

?>

<form action="PHP.php" method="Post">
	<input type="submit" name="roll" value="Roll Dice.">
</form>/* dice roll app for random function */




$redirect_page = 'http://google.com';
$redirect = true;

if($redirect==true){
	header('Location: '.$redirect_page);
}/* using the header to force page redirect */



<?php ob_start(); ?>


<h1>My page</h1>
This is my page.

<?php

$redirect_page = 'http://google.com';
$redirect = false;

if($redirect==true){
	header('Location: '.$redirect_page);
}

ob_end_flush();
?>/* ob malhash lazma bs eshta sha3'al */




<?php 
include 'PHPExtra.php';

foreach ($ip_blocked as $ip){
	if ($ip==$ip_address){
		die('Your IP adress, '.$ip_address.' has been blocked');
	}
}

 ?>
<h1>Welcome <3</h1>
at extra
<?php 
$ip_address = $_SERVER['REMOTE_ADDR'];
$ip_blocked = array('::1', '127.0.0.1');
 ?>



$browser = get_browser(null, true);
$browser = strtolower($browser['browser']);

if($browser!='chrome'){
	echo 'You are not using google chrome pleade do!';
}/* detecting user browser examp*/





<?php 

if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])){
	$day = htmlentities($_GET['day']);
	$date = htmlentities($_GET['date']);
	$year = htmlentities($_GET['year']);
	if(!empty($day)&&!empty($date)&&!empty($year)){
		echo 'It is '.$day.' '.$date.' '.$year;
	}else {
		echo 'Fill in all gaps';
	}
}	
 ?>
/* htmlentites use to display everytihng without coding security */
<form action="PHP.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br><br>
	<input type="submit" value="Submit">
</form>



<?php 

$match = 'refaie123';

if(isset($_POST['password'])){
	$password = $_POST['password'];
	if (!empty($password)){
		if($password==$match){
			echo 'Welcome Refaie Sir';
		}else {
			echo 'Who the fuck are you _|_';
	}
		}else {
			echo'Please enter a password.';
		}
}
?>
/* post use password exampe */
<form action="PHP.php" method="POST">
	Password:<br>
	<input type="password" name="password"><br><br>
	<input type="submit" value="Submit">
</form>



<?php
session_start();/*never forget to start the session*/

$_SESSION['username']='refaie';
/*session apps */ 
?>
EXTRA
<?php 
session_start();

if (isset($_SESSION['username'])){
	echo 'Welcome, '.$_SESSION['username'];
}else {
	echo 'Please log in';
}
?>

session_destroy();/* destoryes all data session*/
unset($_SESSION['username']);/*for specific destory*/



setcookie('username', 'ref', time()+20);/* creating cookies */



setcookie('username', 'ref', time()+20000);

setcookie('username', 'ref', time()-20000);
/* this is how you kill a cookie */



$handle= fopen('names.txt', 'w');
fwrite($handle, 'Ref'."\n");

fclose($handle);
/* how to handle form php writing also can (r)ead and (a)ppend*/




<?php
if (isset($_POST['name'])){
	$name = $_POST['name'];
	if (!empty($name)) {
		
		$handle = fopen('names.txt', 'a');
		fwrite($handle, $name."\n");
		fclose($handle);
	}else{
		echo 'Please type a name.';
	}
}/* appending stuff app*/
?>

<form action="PHP.php" method="POST">
	Name:<br>
	<input type="text" name="name"><br><br>
	<input type="submit" value="Submit">
</form>




$filename= 'names.txt'

$handle = fopen($filename, 'r');
echo fread($handle, filesize($filename));
/* reading files */



$names_array = array('Refaie','5alil','Mecho');
$string = implode('-' , $names_array);

echo $string;/* usful to display arrays*/



$directory = 'files';

if ($handle = opendir($directory.'/')){
	echo 'Looking inside \''.$directory.'\':<br>';
	
	while ($file = readdir($handle)) {
		if($file!='.'&&$file!='..'){
		echo '<a href="'.$directory.'/'.$file.'">'.$file.'<br>';
		}
	}
}/* handling list of files very usfull if image but img src insted of a href */



$filename = '420408.jpg';

if(file_exists($filename)){
	echo 'File already exists.';
}else{
	$handle = fopen($filename, 'w');
	fwrite($handle, 'Nothing');
	fclose($handle);
}/* cheks if files exists so dont overwrite*/



$image='420408.jpg';
if(unlink($image)) {
	echo 'File <strong>'.$image.'</storng> has been deleted.';
}else{
	echo 'File dosen\'t exists.';
}/* deleting files babe*/



$filename = '420408.jpg';

if (rename($filename, 'Lol.udyr'.'.jpg')){
	echo 'File '.$filename.' has been renamed to '.'Lol.udyr';
}/* renaming files*/



<?php

$name = $_FILES['file']['name'];
//$size = $_FILES['file']['size'];
//$type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

if(isset($name)){
	if(!empty($name)){
	
	$location = 'PHPExtra.php';
	
	if (move_uploaded_file($tmp_name, $location.$name)){
		echo 'Uploaded';
	}
		
	}else {
		echo 'Please choose a file';
	}
}
?>

<form action="PHP.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="Submit">
</form>/* how to upload files basics*/



<?php

$name = $_FILES['file']['name'];

$extension =strtolower( substr($name, strpos($name, '.') + 1));
$type = $_FILES['file']['type'];

//$size = $_FILES['file']['size'];

$tmp_name = $_FILES['file']['tmp_name'];

if(isset($name)){
	if(!empty($name)){
		
		if($extension=='jpg'||$extension=='jpeg'&&$type=='image/jpeg'){
	
	$location = 'Uploads/';
	
	if (move_uploaded_file($tmp_name, $location.$name)){
		echo 'Uploaded';
	}
		}else{
			echo 'File must be jpg/jepg';
		}
		
	}else {
		echo 'Please choose a file';
	}
}
?>

<form action="PHP.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="Submit">
</form>/* upload and security only imges are allowed*/



<?php

include 'PHPExtra.php';

hit_count();

?>
/* when you refresh add 1 to file count.txt*/
EXRA code
<?php
function hit_count(){
	$filename = 'count.txt';
	$handle = fopen($filename, 'r');
	$current = fread($handle, filesize($filename));
	fclose($handle);
	
	$current_inc = $current + 1 ;
	
	$handle = fopen($filename, 'w');
	fwrite($handle, $current_inc);
	fclose($handle);
}
?>



<?php


function hit_count(){
	$ip_address = $_SERVER['REMOTE_ADDR'];
	
	$ip_file = file('Ip.txt');
	foreach($ip_file as $ip){
		$ip_single = trim($ip);
		if($ip_address==$ip_single){
			$found = true;
			break;
		}else{
			$found = false;
		}
	}
	if($found==false){
		$filename = 'count.txt';
		$handle = fopen($filename, 'r');
		$current = fread($handle, filesize($filename));
		$current;
		fclose($handle);
		
		$current_inc = $current + 1;
		
		$handle = fopen($filename, 'w');
		fwrite($handle, $current_inc);
		fclose($handle);
		
		$handle = fopen('Ip.txt', 'a');
		fwrite($handle, $ip_address."\n");
		fclose($handle);
	}
}
?>/* fucken code to hit count and save ip */



<?php
if (isset($_POST['user_password'])&&!empty($_POST['user_password'])){
	$user_password =md5($_POST['user_password']);
	
	$filename='Ip.txt';
	$handle = fopen($filename, 'r');
	$file_password = fread($handle, filesize($filename));
	
	if($user_password==$file_password){
		echo 'Welcome Sir';
	}else{
		echo 'Incorrect password';
	}
	
}else{
	echo 'Please enter a password.';
}


?>

<form action="PHP.php" method="POST">
	Password: <input type="text" name="user_password"><br><br>
	<input type="submit" value="Submit">
</form>/* md5 in use password*/
Ip.txt
5f4dcc3b5aa765d61d8327deb882cf99



<?php
$to = 'ahmedomargreat@gmail.com';
$subject = 'Email to use';
$body = 'Ya 3am ana 3omda aft7 ';
$headers = 'From: Assasin@kills.com';

if(mail($to, $subject, $body, $headers)){
	echo 'Email has sent.';
}else{
	echo 'There was an error';
}
?>/* how to send mails*/




<?php
if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];
	
	if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text)){
		
		$to = 'ahmedomargreat@gmail.com';
		$subject = 'Contact form submitted';
		$body = $contact_name."\n".$contact_text;
		$headers = 'From: '.$contact_email;
		
		if(mail($to, $subject, $body, $headers)){
			echo'Email Sent';
		}else{
			echo 'Error,Sory failed to send your E-mail.';
		}
		
	}else{
		echo 'All Gaps are Required';
	}
}
	

?>

<form action="PHP.php" method="POST">
	Name:<br><input type="text" name="contact_name"><br><br>
	Email address:<br><input type="text" name="contact_email"><br><br>
	Message:<br>
	<textarea name="contact_text" rows="6" cols="30"></textarea><br><br>
	<input type="submit" value="Send">
</form>/*creating simple contact form*/




$xml = simplexml_load_file('example.xml');

echo $xml->producer[0]->name.' is '.$xml->producer[0]->age;/* simple acsses to xml data*/
//xml file
<producers>
           <producer>
					 <name>Refaie</name>
					 <age>20</age>
			</producer>
		   <producer>
					 <name>Alex</name>
					 <age>24</age>
			</producer>
		   <producer>
					 <name>Bucky</name>
					 <age>27</age>
			</producer>
</producers>



$xml = simplexml_load_file('example.xml');

foreach($xml->producer as $producer){
	echo $producer->name.' ia '.$producer->age.'<br>';
}/* reading or applaying all data */



$xml = simplexml_load_file('example.xml');

foreach($xml->producer as $producer){
	echo $producer->name.' ('.$producer->age.')<br>';
	foreach ($producer->show as $show) {
		echo $show->showname.' on '.$show->showdate.'<br>';
	}
}/*looping to show data*/
xml
<producers>
           <producer>
					 <name>Refaie</name>
					 <age>20</age>
					 <show>
						   <showname>A show</showname>
						   <showdate>12th September 1997</showdate>
					 </show>
					 <show>
						   <showname>Another show</showname>
						   <showdate>13th November 2000</showdate>
					 </show>
			</producer>
		   <producer>
					 <name>Alex</name>
					 <age>36</age>
					 <show>
						   <showname>Better show</showname>
						   <showdate>25th July 2007</showdate>
					 </show>
			</producer>	
</producers>





$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'a_database';

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) ;

if(!mysqli_connect($mysql_host, $mysql_user, $mysql_pass)||!mysqli_select_db($link, $mysql_db)){
	die($conn_error);
}else {
	echo 'Connected';
}/* finally fucken connected to database*/





<?php
require 'PHPExtra.inc.php';

$query = "SELECT `Id`, `Username`, `Password`, `FirstName`, `LastName` FROM `users` WHERE 1";

if($query_run = mysqli_query($link, $query)){
	
	while ($query_row = mysqli_fetch_assoc($query_run)){
		$username = $query_row['Username'];
		$pass = $query_row['Password'];
		
		echo $username.' has Password: '.$pass.'<br>';
	}
	
}else{
	echo mysqli_error($link);
}
?>/*PHPextra*/
<?php
$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'a_database';

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) ;

if(!mysqli_connect($mysql_host, $mysql_user, $mysql_pass)||!mysqli_select_db($link, $mysql_db)){
	die($conn_error);
}
?>/* display data from database query*/



<?php
require 'PHPExtra.inc.php';
?>
<form action="PHP.php" method="GET">
	<select name="UP">
	<option value="username">Username</option>
	<option value="password">Password</option>
	</select><br><br>
	<input type="submit" value="Submit">
</form>

<?php

if (isset($_GET['UP'])&&!empty($_GET['UP'])){
	
	$UP = strtolower($_GET['UP']);
	
	if($UP=='username'||$UP=='password'){
	
		$query = "SELECT `Id`, `Username`, `Password` FROM `users` WHERE `Username`='$UP'&&`Password`='UP'";

		if($query_run = mysqli_query($link, $query)){
			
			while ($query_row = mysqli_fetch_assoc($query_run)){
				$username = $query_row['Username'];
				$pass = $query_row['Password'];
				
				echo $username.' has Password: '.$pass.'<br>';
			}
			
		}else{
			echo mysqli_error($link);
		}
	}else {
		echo 'Pick a User or pass only';
	}
}
?>/* failed example for choosing phpextra same as examp before */




UPDATE `users` SET `LastName`='Refaie' WHERE `Id`=1 /*my SQL code to change data*/


DELETE FROM `users` WHERE `Id`=4 
/*to delete data or full info from SQL*/


INSERT INTO `users` VALUES ('3','5alil','khelo123','Mahmoud','Khalil')/*to insert values to your table thro SQL*/


SELECT `users`.`Username` , `pets`.`pet` FROM `users` LEFT JOIN `pets` ON `users`.`Id`=`pets`.`user_id`/* left join method to match from tables*/


SELECT `users`.`Username` , `pets`.`pet` FROM `users` RIGHT JOIN `pets` ON `users`.`Id`=`pets`.`user_id` /* displayes data even it dosent have a value*/


SELECT `users`.`Username` , `pets`.`pet` FROM `users` JOIN `pets` ON `users`.`Id`=`pets`.`user_id`/* join only method matches only and ignors the rest*/



SELECT `name` FROM `names` WHERE `name` LIKE '%refaie'/* searching like style to find same matches*/


SELECT `name` FROM `names` WHERE `name` LIKE '%ref%' /*sexy results on both sides*/


SELECT `name` FROM `names` WHERE `name` NOT LIKE '%ref%'/*if you wana search to assasinait some people not on your family lol XD*/


 

<?php
require 'PHPExtra.inc.php';

if(isset($_POST['search_name'])) {
	$search_name = $_POST['search_name'];
	if(!empty($search_name)) {
		
		$query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysqli_real_escape_string($link,$search_name)."%'";
		$query_run = mysqli_query($link, $query);
		
		$query_num_rows = mysqli_num_rows($query_run);
		
		if($query_num_rows>=1){
			echo $query_num_rows.' results found:<br>';
			while($query_row = mysqli_fetch_assoc($query_run)){
				echo $query_row['name'].'<br>';
			}
			
		}else{
			echo 'No match found.';
		}
	}
}
?>


<form action="PHP.php" method="POST">
	Name: <input type="text" name="search_name">
	<input type="submit" value="Search">
</form> /* awsome search engine program same phpextra data */



SELECT DISTINCT `Lastname` FROM `names`/* select distinct only shows data without rebeating 1 time only tho */



<?php
if (isset($_POST['username']) &&isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = md5($password);
	
	if(!empty($username)&&!empty($password)){
		
		$query = "SELECT `id` FROM `users` WHERE `Username`='".$username."' AND `Password`='".$password_hash."'";
		$result = mysqli_query($link, $query);
		
	if(mysqli_num_rows($result) == 0){
		echo 'Invalid username/password combination';
		
	}else if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$user_id = "id:" . $row["id"];
			$_SESSION['user_id']=$user_id;
		header ('Location: PHP.php');
   }
  } 
	}
}	
?>

<form action="<?php echo $current_file; ?>" method="POST">
Username: <input type="text" name="username">
Password: <input type="password" name="password">
<input type="submit" value ="Log in">
</form>/* login code in phpextra 2*/


<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = @$_SERVER['HTTP_REFERER'];

function loggedin(){
	if (isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
		return true;
	}else {
		return false;
	}
}
?>/*core file login*/


<?php
require 'core.inc.php';
require 'PHPExtra.inc.php';

if(loggedin()){
	echo 'You are loged in. <a href="logout.php">Log out </a><br>';
}else{ 
	include 'PHPExtra2.php';
}

?>/*main page code login*/


<?php
require 'core.inc.php';
session_destroy();
header('Location: '.$http_referer);
?>/*logout.php page babeeee*/


<?php
$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'a_database';

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) ;

if(!mysqli_connect($mysql_host, $mysql_user, $mysql_pass)||!mysqli_select_db($link, $mysql_db)){
	die($conn_error);
}
?>/*php Extra.inc.php file*/


<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>/*index.php*/

/*end of login form*/














<?php
require 'core.inc.php';

if(!loggedin()){
	
if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['surname'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_again = $_POST['password_again'];
    $firstname = $_POST['firstname'];
	$surname = $_POST['surname'];

if (!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)){
	echo 'Ok.';
}else {
	echo 'Please fill all fields.';
	}

}           
	
?>



<form action="Register.php" method="POST">
Username:<br> <input type="text" name="username"> <br><br>
Password:<br><input type="password" name="Password"><br><br>
Password again:<br> <input type="password" name="Password_again"><br><br>
Firstname:<br> <input type="text" name="firstname"><br><br>
Surname:<br> <input type="text" name="surname"><br><br>
<input type="submit" vale="All Set">
</form>






<?php	
}else if(loggedin()){
	echo 'You\'re already Registered and got an accout here.';
}

?>





































































































































































































?>