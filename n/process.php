<?php
session_start();

$mysqli = new mysqli('localhost','root','','accounts') or die(mysqli_error($mysqli));


$var1 ='';
$var2 = '';
$file_path='';

if(isset($_POST['save'])){

	$var1 =$_POST['text1'];
    $var2 = $_POST['text2'];
	$file_path = $mysqli->real_escape_string('images/'.$_FILES['file']['name']);
	 if(preg_match("!image!", $_FILES['file']['type'])&& (copy($_FILES['file']['tmp_name'],$file_path)))
	 {
	 $mysqli->query("INSERT INTO data(data1,data2,data3) VALUES('$var1','$var2','$file_path')") or die($mysqli->error); 
	 header("location:page.html");
     }
     else{
       echo "Please only upload GIF,JPEG or PNG images";
        }
}
 ?>
 