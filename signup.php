<?php 
echo '<div class="signupform modal-fcls">
  <form class="" method="post" action="userValidate.php">
	  <h1 style="color: thistle;">Sign Up</h1>
	  <p>Please fill in this form to create an account.</p>
	  <hr>

	  
	  <input type="text" placeholder="Hotel/Restorant Name" name="vndrName" required>
	  <input type="text" placeholder="Manager Name" name="mgrName" required>
	  <input type="text" placeholder="Enter Email" name="email" required>
	  <input type="text" placeholder="Phone Number" name="Phone" required>
	  <input type="password" placeholder="Enter Password" name="passw" required>
	  <input type="password" placeholder="Repeat Password" name="repassw" required>
	  <input type="text" placeholder="Country" name="Ctry" required>
	  <input type="text" placeholder="Street Address" name="Adress" required>
	  <input type="text" placeholder="Postal Code" name="pcod" required>
	  <input type="text" placeholder="city example: Addis Ababa" name="ct" required>
	  <input type="text" placeholder="Map Address" name="map" >
	 
	  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
	  <p>Already have an account? <a href="sign.php?sign=2" style="color:dodgerblue">sign in</a>.</p>
		<button type="submit" name="sinmeup" class="signupbtn">Sign Up</button>
	  <div class="clearfix"></div>
		</form>
</div>';
?>