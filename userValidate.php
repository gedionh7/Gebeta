<?php 

//include config.php to connect to the database
	include("config.php"); 
	
	//start session
    session_start();
{
	if(isset($_POST['logmein'])){
		// get $myusername and $mypassword
	$email=$_POST['email'];
	$pass=$_POST['password'];

	//$email="admin@googles.33mail.com";
	//$pass="366scXRCmUjLyJ";
	// To protect MySQL injection
	$email= mysqli_real_escape_string( $mysqli,$email);
	$pass = mysqli_real_escape_string( $mysqli, $pass);

	$lis_dta = "SELECT * FROM customer where Email='$email' and Password= '$pass'";
	$lsd = $mysqli->query($lis_dta);
	while($row =$lsd->fetch_assoc()){
		$_SESSION['userid']=$row['Cust_Id'];
		$_SESSION['vndrName']=$row['vndrName'];
	}

    if($_SESSION['userid']!="")
    {
	header("location: add_product.php");
    }
    else
    {
		header("location: sign.php");
	   echo "you not logd in ";
	}
}
if(isset($_POST['sinmeup'])){



	//signup coustomer
	if($_POST['passw'] == $_POST['repassw']){
		$passw = $_POST['passw'];
		}
		else
		{
			header("location: sign.php?msg=password");
		}
		
		echo "$_POST[vndrName]
$_POST[mgrName]
$_POST[Phone]
$_POST[email]
$passw
$_POST[Ctry]
$_POST[ct]
$_POST[Adress]
$_POST[pcod]
$_POST[map]";
	$sql="INSERT INTO customer (vndrName,mgrName,Phone,Email,Password,Country,City,Adress,PostalCode,map) 

VALUES ('$_POST[vndrName]', '$_POST[mgrName]', '$_POST[Phone]','$_POST[email]',  '$passw', '$_POST[Ctry]', '$_POST[ct]', '$_POST[Adress]', '$_POST[pcod]','$_POST[map]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
}
else{

	//header("location: sign.php");
}

}/*
$lis_dta = "SELECT * FROM user";
  $lsd = $conn->query($fetch);

  echo "<table border=1> <td>No</td><td>@user name </td><td>Full Name</td><td>Edit </td><td>Delet</td>";
  while($row =$lsd->fetch_assoc()){

    echo "<tr><td><b style='color:red'>" ,$row['uid'],"</b><br></td>";*/
?>
