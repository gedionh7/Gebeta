<?php
include 'config.php';
include "head.php";
?>
  <?php
	if(isset($_POST['Product_ID'])){
        echo $pidd=$_POST['Product_ID'];
	$results = $mysqli->query("SELECT * FROM product WHERE Product_ID='$pidd' ");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        { 
            $cidd = $obj->cust_ID;
			
			echo $obj->productName;
            echo $obj->avity;
            echo $obj->Type;
            echo $obj->Price;
            echo $obj->Picture;
            echo $obj->Description;
        }
    
    }
    $results = $mysqli->query("SELECT * FROM customer WHERE cust_ID='$cidd' ");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        { 
			
			echo $obj->FullName;
            echo $obj->UserName;
            echo $obj->Phone;
            echo $obj->Email;
            echo $obj->Country;
            echo $obj->City;
            echo $obj->Adress;
            echo $obj->PostalCode;
            echo $obj->map;

        }
    
    }
}else{
    header("location: index.php");
}
    ?>

<?php
include "footer.php";
?>