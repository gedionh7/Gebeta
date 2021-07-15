<?php
include("config.php");
include("head.php");
//if(isset()){
if(isset($_GET['delete'])){
    $sql="DELETE FROM product  WHERE  Product_ID = '$_GET[delete]' ";
    if (!mysqli_query($mysqli,$sql))
        {
        die('Error: ' . mysqli_error($mysqli));
        }
}

if(isset($_POST['update'])){
    $fname = strtotime(date('Y-m-d H:i')).'_'.$_FILES['picture']['name'];
    $sql="UPDATE product SET productName = '$_POST[name]', avity = '$_POST[avity]', Type = '$_POST[type]', Description = '$_POST[dsc]', Price = '$_POST[price]', Picture = '$fname' WHERE Product_ID = '$_POST[product_id]' ";

 
    if (!mysqli_query($mysqli,$sql))
    {
    die('Error: ' . mysqli_error($mysqli));
    }
    if(!empty($_FILES['picture']['tmp_name'])){
        move_uploaded_file($_FILES['picture']['tmp_name'], 'images/'.$fname);
    }
    header("location: add_Product.php");
    echo "1 record Upadated";
}

    if(isset($_POST['add'])){
        $fname = strtotime(date('Y-m-d H:i')).'_'.$_FILES['picture']['name'];
        $sql="INSERT INTO product (productName, avity,Type, cust_ID, Description,Price, Picture) 
        VALUES ('$_POST[name]', '$_POST[avity]', '$_POST[type]', '$_SESSION[userid]', '$_POST[dsc]', '$_POST[price]', '$fname')";

        if (!mysqli_query($mysqli,$sql))
        {
        die('Error: ' . mysqli_error($mysqli));
        }
        if(!empty($_FILES['picture']['tmp_name'])){
            move_uploaded_file($_FILES['picture']['tmp_name'], 'images/'.$fname);
        }
        header("location: add_Product.php");
        echo "1 record added";

        mysqli_close($mysqli);
        }
    
        elseif (isset($_GET['update'])) 
     {

    $result = mysqli_query($mysqli,"SELECT * FROM product WHERE Product_ID='$_GET[update]' ");
while($row = mysqli_fetch_array($result)) {

    echo '
    <br><br><br>
    <div >
    <table class="table table-sm table-dark table-striped table-hover htable-borderless">
            <form action="add_product.php" method="POST" enctype="multipart/form-data" id="myForm">
            <th colspan="3">
                    <h2>Update PRODUCT:</h2><a href="add_product.php" class="btn-primary">Add new</a>
                </th>
                <tr>
                    <td>
                       <label> Name:</label>
                       <input type="hidden" name="product_id" id="name" class="" value='.$_GET['update'].' required>
                       <input type="text" name="name" id="name" class="" value=';echo $pn=$row['productName']; echo ' required>
                    </td>
                    <td>
                    <label> available :</label>
                    <select name="avity">
                        <option value="yes">yes</option>
                        <option value="Not">Not</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Type:</label>
                        <select name="type">
                        <option value="Kurs">Kurs</option>
                        <option value="Msa">Msa</option>
                        <option value="Erat">Erat</option>
                        <option value="snack">snack</option>
                        </select>
                    </td>
                    <td>
                        <label> Description:</label>
                        <input type="text" name="dsc" value=';echo $xd=$row['Description'];echo 'required>
                </td>
                </tr>
                <tr>
                    <td>
                        <label>Price:</label>
                        <input type="text" name="price" id="price" value=';echo $xp=$row['Price'];echo ' style="text-align: right" required>
                    </td>
                    <td>
                        <label> Picture:</label>
                        <input type="file" name="picture" id="picture" required>
                    </td>
    
    
                </tr>
                <div class="bottom">
    
                    <td colspan="3">
                        <button name="update" id="delbutton" title="Click to update" class="btn-primary"> <span class="a-btn-text">
                                Update Product</span></button>
                            <div class="clear"></div>
                </div>
            </form>
        </table>
    </div>';}
}elseif (isset($_GET['delete'])) {
    # code...
}else{
    echo '
    <br><br><br>
    <div >
    <table class="table table-sm table-dark table-striped table-hover htable-borderless">
            <form action="add_product.php" method="POST" enctype="multipart/form-data" id="myForm">
            <th colspan="3">
                    <h2>ADD PRODUCT:</h2>
                </th>
                <tr>
                    <td>
                       <label> Name:</label>
                       <input type="text" name="name" id="name" class="" required>
                    </td>
                    <td>
                    <label> available :</label>
                    <select name="avity">
                        <option value="yes">yes</option>
                        <option value="Not">Not</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Type:</label>
                        <select name="type">
                        <option value="Kurs">Kurs</option>
                        <option value="Msa">Msa</option>
                        <option value="Erat">Erat</option>
                        <option value="snack">snack</option>
                        </select>
                    </td>
                    <td>
                        <label> Description:</label>
                        <input type="text" name="dsc" required>
                </td>
                </tr>
                <tr>
                    <td>
                        <label>Price:</label>
                        <input type="text" name="price" id="price" style="text-align: right" required>
                    </td>
                    <td>
                        <label> Picture:</label>
                        <input type="file" name="picture" id="picture" required>
                    </td>
    
    
                </tr>
                <div class="bottom">
    
                    <td colspan="3">
                        <button name="add" id="delbutton" title="Click to Save" class="a-btn"> <span class="a-btn-text">
                                Add Product</span></button>
                            <div class="clear"></div>
                </div>
            </form>
        </table>
    </div>';
}



?>

<?php
$result = mysqli_query($mysqli,"SELECT * FROM product");
?>
<br>
<div id="tab1" class="tab_content">
    <table class="table table-sm table-dark table-striped table-hover">

        <thead>
            <th Colspan="11"> <?php echo $_SESSION['vndrName']; ?> Product Data Table </th>
        </thead>
        <thead>
            </tr>
            <th>ID</th>
            <th> Name</th>
            <th>Category</th>
            <th> Type</th>
            <th> Description</th>
            <th>Price</th>
            <th> Picture</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($result))
    {?>

            <tr>
                <td>
                    <?Php echo $row['Product_ID']; ?>
                </td>
                <td><?php echo $row['productName']; ?></td>
                <td><?php echo $row['avity']; ?></td>
                <td>
                    <?Php echo $row['Type']; ?>
                </td>
                <td><?php echo $row['Description']; ?></td>
                <td><?php echo $row['Price']; ?></td>
                <td> <img src="images/<?php echo $row['Picture']; ?> " width="40px" hieght="40px"></td>
                <td><a href="add_product.php?update=<?php echo $row['Product_ID']; ?>" title="empEdit"> <input
                            type="image" src="images/icn_edit.png" title="Edit" width="18px" hieght="18px"> </a>
                    <a href="add_product.php?delete=<?php echo $row['Product_ID']; ?>" title="Delete"
                        class="delbutton"><input type="image" width="18px" hieght="18px" src="images/icn_trash.png" title="Trash">
                    </a>
                </td>
            </tr>

            <?php }mysqli_close($mysqli);?>
        </tbody>
    </table>

</div>
<br>
<?php
include 'footer.php';