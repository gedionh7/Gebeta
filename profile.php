<?php
include("session.php");
include("config.php");
include "head.php";
?>

        <ul>
            <li class="widget">
                <h2>Customer Information</h2>
                        <?php 
                        if(isset($_SESSION['userid'])){
                             $id = $_SESSION['userid'];
                        }
		           
		$query = mysqli_query($mysqli,"SELECT * FROM customer WHERE Cust_Id = '$id' ") or die (mysqli_error()); 
		$result = mysqli_fetch_array($query);	
				?>
                        <table>
                            <form class="register active" action="profile.php" method="POST" >
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
    
<?php
include "footer.php";
?>