<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">

	<title>Guitars</title>
</head>
<body>


<div class="wrapper debug">


	<?php

	//Guitars.php
		include "db_connection.php";  
		
    $g_id = $_GET['Guitar_ID'];
		      

    $sql_querie = "SELECT Guitar_ID, Guitar_Articlenumber, Guitar_Brand, Guitar_Model, Guitar_Price, Guitar_Img , Guitar_Info FROM guitars WHERE Guitar_ID = '$g_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card_single debug">' .
		        			'<div class="left debug">' .
		        				//Brand + Model
		             		'<h1>' . $row['Guitar_Brand']  . ' ' . $row['Guitar_Model'] .'</h1>' . 

		             			 //Price
		             		'<h2 class="prices">' .'€'. $row['Guitar_Price'] .',-'.'</h2>'.  

		             		//Img 
		             		'<img src="' . $row['Guitar_Img'] . '" alt="'  . '" style="width:100%">' .
		            	
		             		
		             '</div>' .
		             '<div class="right debug">' .
				             //Art.nr
				             '<p>' . 'Articlenumber: ' .  $row['Guitar_Articlenumber'] . '</p>' . 
				             //Info
				             '<p>' . $row['Guitar_Info'] . '</p>' .
				             //button
				             '<a href="images/printscreencard.png">'. '<p>' . '<button class="cart_btn">'. 'Add to cart' . '</button>' . '</P>' .
				             '</a>' .
		             '</div>' .
             '</div>';
       
    }     
   
	?>



	</div>
</body>
</html>