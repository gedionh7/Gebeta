<?php
include("config.php");
include("head.php");
/*

$fname = strtotime(date('Y-m-d H:i')).'_'.$_FILES['picture']['name'];
$sql="INSERT INTO product (productName, Category_ID, Model,Type, Warehouse_ID, Description,Price, Picture) 
VALUES ('$_POST[name]', '$_POST[select]', '$_POST[model]', '$_POST[type]', '$_POST[WH]', '$_POST[ml]', '$_POST[price]', '$fname')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  if(!empty($_FILES['picture']['tmp_name'])){
  	move_uploaded_file($_FILES['picture']['tmp_name'], '../images/'.$fname);
  }
  header("location: add_Product.php");
  echo "1 record added";

 mysqli_close($mysqli);*/
?>

<div id="form_wrapper" class="form_wrapper">

    <table>
        <form class="register active" action=" add_Product.php" method="POST" enctype="multipart/form-data" id="myForm">

            <th colspan="3">
                <h2>ADD PRODUCT:</h2>
            </th>


            <tr>
                <td>

                    <label> Name:</label>
                    <input type="text" name="name" id="name" class="" required>
                    <span class="error">This is an error</span>

                </td>
                
                <td>

                    <label> Model:</label>
                    <input type="text" name="model" id="model" required>
                    <span id="pass-info"> </span>

                </td>

            </tr>


            <tr>
                <td>

                    <label> Type:</label>
                    <input type="text" name="type" id="type" required>
                    <span id="pass-info"> </span>


                </td>
                <td>
                    <label> Description:</label>
                    <input type="text" name="ml" id="ml" maxlength="19" required>
                    <span id="pass-info"> </span>

                </td>

            </tr>


            <tr>
                <td>

                    <label>Price:</label>
                    <input type="text" name="price" id="price" style="text-align: right" required>
                    <span class="error">This is an error</span>


                </td>
                <td>

                    <label> Picture:</label>
                    <input type="file" name="picture" id="picture" required>
                    <span class="error">This is an error</span>

                </td>


            </tr>
            <div class="bottom">

                <td colspan="3">

                    <button name="save" id="delbutton" title="Click to Save" class="a-btn"> <span class="a-btn-text">
                            Add Product</span></< /button>
                        <div class="clear"></div>
            </div>

        </form>

    </table>





</div>

<?php
$result = mysqli_query($mysqli,"SELECT * FROM product");
?>
<div id="tab1" class="tab_content">
    <table class="tablesorter" cellspacing="0">

        <thead>
            <th Colspan="11"> Suncart Product Data Table </th>
        </thead>
        <thead>
            </tr>
            <th>Check</th>
            <th>ID</th>
            <th> Name</th>
            <th>Category</th>
            <th>Model</th>
            <th> Type</th>
            <th>WareHouse</th>
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
                <td><input type="checkbox"></td>
                <td>
                    <?Php echo $row['Product_ID']; ?>
                </td>
                <td><?php echo $row['productName']; ?></td>
                <td><?php echo $row['Category_ID']; ?></td>
                <td><?php echo $row['Model']; ?></td>
                <td>
                    <?Php echo $row['Type']; ?>
                </td>
                <td><?php echo $row['Warehouse_ID']; ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td><?php echo $row['Price']; ?></td>
                <td> <img src="images/<?php echo $row['Picture']; ?> " width="40" height="40"></td>
                <td> <a href="prodViewUpdate.php?update=<?php echo $row['Product_ID']; ?>" onClick="edit(this);"
                        title="empEdit"> <input type="image" src="images/icn_edit.png" title="Edit"> </a>
                    <a href="prodDelete.php?delete=<?php echo $row['Product_ID']; ?>" onClick="del(this);"
                        title="Delete" class="delbutton"><input type="image" src="images/icn_trash.png" title="Trash">
                    </a>
                </td>
            </tr>

            <?php }mysqli_close($mysqli);?>
        </tbody>
    </table>

</div>


</section>
</div>
</div>


</body>

</html>