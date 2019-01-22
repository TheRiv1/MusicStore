
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    


<?php

    //CARD.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT Guitar_ID, Guitar_Articlenumber, Guitar_Brand, Guitar_Model, Guitar_Price, Guitar_Img FROM guitars";
    
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
 //voornaam + achternaam 
            // '<h1>' . $row['Guitar_Brand']  . ' ' . $row['Guitar_Model'] .'</h1>' .
             // title 
             //'<p class="title">' . $row['Guitar_Articlenumber'] . '</p>' .           
             //'<p>GuitarStore</p>' .
    $conn = null;
  
?>
</body>
</html>
