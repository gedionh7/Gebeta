<?php
session_start();
include("config.php");
include "head.php";
?>
<h2>Support</h2>
  			<p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Welcome To Live Technical Support</span></p>
  			
				<div id="form_wrapper" class="form card">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="POST" action="feedback_process.php" id="frmcontact">
					    	<div>
						    	<span><label>NAME</label></span><br>
						    	<span><input type="text" name="name" id="name"value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span><br>
						    	<span><input type="text" name="email" id="email"value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span><br>
						    	<span><input type="text" name="phone" id="phone"value=""></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span><br>
						    	<span><textarea name="text"  id="textarea"> </textarea   maxlength="100"></span>
						    </div>
						   <div>
						   		<span><input type = "submit" name = "submit" id = "submit" value="SUBMIT"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				
									
<script type="text/javascript">

$(document).ready(function(){ 
    $("#submit").click(function() { 
 
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'feedback_process.php',
        data: $("#frmcontact").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>
				
<?php
include "footer.php";
?>