<?php
$username=$_POST['username'];
$companyname=$_POST['companyname'];
$_mail=$_POST['mail'];
$_telephone=$_POST['telephone'];

if(!empty($username)|| !empty($companyname)||!empty($$_mail)||!empty($$_telephone)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="aminemoahchtou";
	//create connection

	$SELECT = " SELECT mail From register where mail=? Limit 1";
	$INSERT =" INSERT Into enregistrer (username,companyname, mail,telephone) values(?,?,?,?)";

	$stmt=$conn->prepare($SELECT);
	$stmt -> bind_param("s",$mail);
	$stmt ->execute();
	$stmt ->store_result($mail);
	$stmt->store_result();
	$rnum=$stmt->num_rows;
	if($rnum==0){
		$stmt=$conn->prepare($INSERT);
		$stmt ->bind_param("ssssii" ,$username,$companyname,$mail,$telephone);
		$stmt->execute();
		echo"new record inserted successfully";
	}else{
		echo"soemeone already register using this email";
          }
		  $stmt->close();
		  $conn->close();
          }
		  else{
	echo"ALL field are required";
	die();
    }
?>