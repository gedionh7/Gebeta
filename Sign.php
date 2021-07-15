<?php
include "head.php";
echo '<link rel="stylesheet" href="sign.css" type="text/css" >';
?>
<br><br><br><br>


 <div class="row">
    <div class="col">
	<?php
		if(isset($_GET['sign'])){
			if($_GET['sign']==1){
				include 'signup.php';
			}else{
				include 'signin.php';
			}
		}
?>
	</div>
    <div class="col">
	<div >
	<img id="img1" src="sample.jpg" alt="" style="width:650px;height:500px; ">
  </div>

  <div >
	<img id="img2" src="sample1.png" alt="" style="width:300px;height:465px;">
	<img id="img3"  src="sample3.png" alt="" style="width:345px;height:465px; ">
  </div>

	</div>
  </div>
  
	 <div class="clearfix"></div>
<?php
include "footer.php";
?>