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
}elseif(isset($_POST['sinmeup'])){

	//signup coustomer
}
else{
	header("location: sign.php");
}

}/*
$lis_dta = "SELECT * FROM user";
  $lsd = $conn->query($fetch);

  echo "<table border=1> <td>No</td><td>@user name </td><td>Full Name</td><td>Edit </td><td>Delet</td>";
  while($row =$lsd->fetch_assoc()){

    echo "<tr><td><b style='color:red'>" ,$row['uid'],"</b><br></td>";*/
?>
