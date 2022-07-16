<?php
session_start();
include("config.php");
include "head.php";

?>

<div class="row">
    <div class="col-sm-7">

        <?php


//current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC ");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        { 
			
			echo '<div class="col img_tmp" style="border-radius: 30px;">'; 
			echo '<div class="cardii" >'; 
            echo '<form method="GET" action="cart_update.php">';
			echo '<img class="center-cropped myDIV" alt="'.$obj->productName.'" src="images/'.$obj->Picture.'">';
            echo '<div class="p_name hide"><b>'.$obj->productName.'</b>';
			echo '<input type="hidden" name="productName" value="'.$obj->productName.'" />';
			echo '<input type="hidden" name="Product_ID" value="'.$obj->Product_ID.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '</form>';
            echo '</div>';
			echo '</div>';
			echo '</div>'; 
			
            echo "";

                echo "<button onclick=";echo "sendOrder(";echo "' $obj->productName'";echo ") >Ordering</button>"; 
        
            }
            }
    
	?>
</div>
</div>
<?php
include "footer.php";	
?>