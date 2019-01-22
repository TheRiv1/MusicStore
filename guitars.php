<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Guitars</title>
</head>
<body>

	<?php
		include "db_connection.php";  
		//call other id's
    $g_id = $_GET['Guitar_ID'];
		      

    $sql_querie = "SELECT Guitar_ID, Guitar_Articlenumber, Guitar_Brand, Guitar_Model, Guitar_Price, Guitar_Img FROM guitars WHERE Guitar_ID = '$g_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card">' .
        //link naar guitars.php + foto
            '<h1>' . $row['Guitar_Brand']  . ' ' . $row['Guitar_Model'] .'</h1>' .
             '<a href="guitars.php?Guitar_ID=' . $row['Guitar_ID'] . '">' .
             '<img src="' . $row['Guitar_Img'] . '" alt="' . $row['Guitar_Brand'] . '" style="width:30%">' .
             '</a>' .
            '</div>';
       
    }     
   echo "<link rel='stylesheet' type='text/css' href='style.css' />";
	?>
	
 <!-- <div class="card">
 	<h1>Ibanez grx70</h1>
  <img src="images/ibanez-grx70.jpg" alt="" style="width:30%">
  <p class="price"><h4>€300</h4></p>
  <p>Some text about the..</p>
  <p><button type="submit" value="submit">Add to Cart</button></p>
</div>  -->


<!--<div class="card">
  <img src="images/ibanez-grx70.jpg" alt="" style="width:30%">
  <h1>Ibanez-grx70</h1>
  <p class="price">€300</p>
  <p>Some text about the..</p>
  <p><button>Add to Cart</button></p>
</div> 

<div class="card">
  <img src="images/ibanez-gsa60.jpg" alt="" style="width:30%">
  <h1>Ibanez-gsa60</h1>
  <p class="price">€200</p>
  <p>Some text about the..</p>
  <p><button>Add to Cart</button></p>
</div> 

<div class="card">
  <img src="images/epiphone-afd.jpg" alt="" style="width:30%">
  <h1>Epiphone-afd</h1>
  <p class="price">€350</p>
  <p>Some text about the..</p>
  <p><button>Add to Cart</button></p>
</div>-->



	<!--<div class="guitar">
  <img src="images/jack-danny.jpg" alt="" style="width: 30%;">
  <div class="container">
    <h4><b>Jack & Danny L Rock BK</b></h4> 
    <p></p> 
  </div>
</div>-->
</body>
</html>