<?php
session_start();
include("config.php");


   $sql="INSERT INTO customer (FullName, UserName, Phone, Email, Password, Re_Password, Country, City, Adress, PostalCode) 
   VALUES ('$_POST[name]', '$_POST[username]', '$_POST[tell]', '$_POST[email]', '$_POST[password1]', '$_POST[password2]', '$_POST[country]', '$_POST[City]', '$_POST[address]', '$_POST[pcode]')";
   
   if (!mysqli_query($mysqli,$sql))
     {
     die('Error: ' . mysqli_error($mysqli));
     }
     echo "1 record added";
   
    mysqli_close($mysqli);
?> 
					
<div id="form_wrapper" class="form_wrapper">
	 <table>
	<form class="register active"  id="myForm" method="POST" action="customer.php">

   
       <th colspan="3"><h2>CUSTOMER REGISTRATION:</h2> </th> 
						
   <tr>
    <td>  

		<label> Email:</label>
		<input type="text" name="email" id="email"/>
		<span class="error">This is an error</span>

	
	</td>
    <td>   



		<label> FullName:</label>
		<input type="text" name="name" />
		<span class="error">This is an error</span>
		
		<label>Password:</label>
		<input type="password" name="password1" id="password1" />
		<label>UserName:</label>
			<input type="text" name="username" id="username"/>
			<span class="error">This is an error</span>
		<label> Re-Password:</label>
		<input type="password" name="password2"id="password2" />  
		<div id="pass-info"> </div>
		<label> Phone:</label>
			<input type="text" name="tell" id="tell"/>
			<span class="error">This is an error</span>

   </td>
   
   
   </tr>
   
    <tr>
    <td>   
	
		<label> Cuntery:</label>
        <script type="text/javascript" src="js/countries.js"></script>
        <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country"></select>

   </td>
   
    <td>   

        <label>Address:</label>
		<input type="text" name="address" id="address"/>
		<span class="error">This is an error</span>   
		

   </td>
   
   
   </tr>
   
   
   <tr>
      <td>   
  
            <label> City:</label>
			<select name ="City" id ="state"></select>
		    <script language="javascript">print_country("country");</script>
			<span class="error">This is an error</span>
    </td>
   
      <td>   
   
			<label>Postal code:</label>
			<input type="text" name="pcode" id="pcode"/>
			<span class="error">This is an error</span>

   </td>
   
   </tr>
   
   
  <tr>
						<div class="bottom">
						<td colspan="3">	
						<button  id="btnSubmit" type="submit" name="submit"> Register</button>
							
							<div class="clear"></div>
						</div>
						
		
   </tr>
					</form>

					</table>
					
</html>