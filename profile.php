<?php

include("csession.php");
include("config.php");
include "head.php";
?>

<!-- End Navigation -->

<!-- Begin Main -->
<div id="main" class="shell">

    <br> <br>
    <!-- Begin Content -->
    <div id="content">
        <div class="post">


            <div class="cl">&nbsp;</div>
        </div>
    </div>
    <!-- End Content -->
    <!-- Begin Sidebar -->
    <div id="sidebar">
        <ul>
            <li class="widget">
                <h2>Customer Information</h2>
                <div class="brands">
                    <div id="form_wrapper" class="form_wrapper">
                        <?php  
		$id = $_SESSION['userid'];
		$query = mysqli_query($mysqli,"SELECT * FROM customer WHERE Email = '$id'") or die (mysqli_error()); 
		$result = mysqli_fetch_array($query);	
														?>
                        <table>
                            <form class="register active" action="custUpdate.php" method="POST" autocomplete="off">
                                <tr>

                                    <td><input name="username" type="hidden" id="namebox"
                                            value="<?php echo $result['Cust_Id']?>" /></td>
                                </tr>
                                <tr>

                                    <td> <label>Full Name:</label><input name="firstname" type="text" id="namebox"
                                            value="<?php echo $result['FullName']?>" /></td>
                                </tr>
                                <tr>

                                    <td> <label>User Name:</label><input name="lastname" type="text" id="namebox"
                                            value="<?php echo $result['UserName']?>" /></td>
                                </tr>
                                <tr>

                                    <td> <label>Phone:</label><input name="phone" type="text" id="namebox"
                                            value="<?php echo $result['Phone']?>" /></td>
                                </tr>
                                <tr>

                                    <td> <label>Email:</label><input name="Email" type="text" id="namebox"
                                            value="<?php echo $result['Email']?>" /></td>
                                </tr>
                                <tr>

                                    <td> <label>Country:</label> <input name="country" type="text" id="namebox"
                                            value="<?php echo $result['Country']?>" /></td>
                                </tr>
                                <tr>

                                    <td> <label>City:</label> <input name="city" type="text" id="namebox"
                                            value="<?php echo $result['City']?>" /></td>
                                </tr>
                                <tr>

                                    <td> <label>Address:</label> <input name="address" type="text" id="namebox"
                                            value="<?php echo $result['Adress']?>" /></td>
                                </tr>
                                <tr>

                                    <td> <label>Postal Code:</label> <input name="pcode" type="text" id="namebox"
                                            value="<?php echo $result['PostalCode']?>" /></td>
                                </tr>


                                <td colspan="3">

                                    <button type="submit" name="submit" value="Update" class="a-btn"><span
                                            class="a-btn-text"> Update</span> </button>

                                </td>

                            </form>
                        </table>
                    </div>

                    <div class="cl">&nbsp;</div>
                </div>

            </li>
        </ul>
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>




    <!-- Begin Products Slider -->
    <div id="product-slider">
        <h2>Best Products</h2>
        <ul>

            <?php
			$result=mysqli_query($mysqli,"select * from product") or die (mysqli_error());
			while($row=mysqli_fetch_array($result)){
		?>
            <li>
                <a href="products.php" title="Product Link"><img src="images/<?php echo $row['Picture']?>"
                        alt="IMAGES" /></a>
                <div class="info">
                    <h4><b><?php echo $row['productName']?></b></h4>
                    <span class="number"><span>Price:<big
                                style="color:green">$<?php echo $row['Price']?></big></span></span>

                    <div class="cl">&nbsp;</div>

                </div>
            </li>
            <?php } ?>
        </ul>
        <div class="cl">&nbsp;</div>
    </div>
    <!-- End Products Slider -->


    <?php
   $ids = $_SESSION['login_username'];
		$qry = mysqli_query($mysqli,"SELECT * FROM customer WHERE Email = '$ids'") or die (mysqli_error()); 
							
?>




</div>
<!-- End Main -->

</div>
<!-- End Wrapper -->
</body>

</html>