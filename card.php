
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Card</title>
</head>
<body>
    


<?php

    //Card.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT Guitar_ID, Guitar_Articlenumber, Guitar_Brand, Guitar_Model, Guitar_Price, Guitar_Img, Guitar_Info FROM guitars";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card debug">' .
        //link naar guitars.php + foto
            
             '<a href="guitars.php?Guitar_ID=' . $row['Guitar_ID'] . '">' .
             '<img src="' . $row['Guitar_Img'] . '" alt="' . $row['Guitar_Brand'] . '" style="width: 100%">' .
             '</a>' .
             
             '<h1>' . $row['Guitar_Brand']  . ' ' . $row['Guitar_Model'] .'</h1>' .
             
             '<h2 class="price">' .'€'. $row['Guitar_Price'] .',-'.'</h2>'.
           // '<a href="guitar_info.php?id=' . $row['Guitar_ID'] . '">' .
            
            '</a>'.
            '</div>';
       
    }       
 
    $conn = null;
  
?>

</body>
</html>
