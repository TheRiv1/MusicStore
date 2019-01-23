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


<div class="wrapper">


	<?php

	//Guitars.php
		include "db_connection.php";  
		
    $g_id = $_GET['Guitar_ID'];
		      

    $sql_querie = "SELECT Guitar_ID, Guitar_Articlenumber, Guitar_Brand, Guitar_Model, Guitar_Price, Guitar_Img , Guitar_Info FROM guitars WHERE Guitar_ID = '$g_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card2 debug">' .
        			//Brand + Model
            '<h1>' . $row['Guitar_Brand']  . ' ' . $row['Guitar_Model'] .'</h1>' .
            
            //Img 
             '<img src="' . $row['Guitar_Img'] . '" alt="'  . '" style="width:30%">' .
             //Price
             '<h2 class="price">' .'€'. $row['Guitar_Price'] .',-'.'</h2>'.
             //Art.nr
             '<p>' . 'Articlenumber: ' .  $row['Guitar_Articlenumber'] . '</p>' . 
             //Info
             '<p>' . $row['Guitar_Info'] . '</p>' .
             //button
             '<a href="https://www.musicstore.de/nl_NL/EUR/cart">'. '<p>' . '<button class="btn2">'. 'Add to cart' . '</button>' . '</P>' .
             '</a>' .
            '</div>';
       
    }     
   
	?>



	</div>
</body>
</html>