<html lang="en">
<head>
<meta charset = "UTF"-8">
<meta name ="viewport" content="width-device, intial-scale=1.0">
<title> document </title>
</head>
<body>
<?php
$host_ip="localhost :3307";
$username= "root";
$password= "";
$database="lab_db";
$conn= mysqli_connect($host,$username,$password,$database);
if (!$conn){
	echo "debugging error".mysqli_connect_errno();
	echo "<br>";
	echo "debugging error".mysqli_connect_errno();
	exist;
}
else{
echo "connected sucessfully";}
$quary ="insert into '06_lab' (F_name,L_name,S_id,Major) VALUES ("lEENA", "AHMED",201812186, "Software")";
if (mysqli_quary($conn, $quary)){
	echo "new record has been created";
}
else{
	echo " error".$quary."<br>".mysqli_error($conn,);
}
mysqli_close($conn);
?>
</body>
</html>
	
