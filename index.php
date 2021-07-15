<?php
session_start();
include("config.php");
include "head.php";
?>
<img width="100%" height="377px" style="object-fit: cover;object-position: 50% 49%;" src="images/6.jpg" alt="">
<div class="days_migb" id="products">
    <h2>Featured Products</h2>
    <div class="row">
        <div class="col-sm-5 sticky">
            <img style="float:left;width:400px; height:800; position: -webkit-sticky; position: sticky; top: 0;" class="img_tmp" src="../../img/photo_2021-05-15_10-39-34.jpg" alt="">
        </div>
        <div class="col-sm-7" style="float:right;">
            <?php
	
	$results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC ");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        { 
			
			echo '<div class="col img_tmp" style="border-radius: 30px;">'; 
			echo '<div class="cardii" >'; 
            echo '<form method="post" action="singProdut.php">';
			echo '<img class="center-cropped myDIV" alt="'.$obj->productName.'" src="images/'.$obj->Picture.'">';
            echo '<div class="p_name hide"><b>'.$obj->productName.'</b>';
			echo '</div><p class="price_on_img">'.$obj->Price.' birr <input style="color:#fff;" class="btn" type="submit" name="type" value="view" /></p>';
			echo '<input type="hidden" name="Product_ID" value="'.$obj->Product_ID.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '</form>';
            echo '</div>';
			echo '</div>';
			echo '</div>';
        }
    
    }
    ?>
<?php
		include "footer.php";
		?>