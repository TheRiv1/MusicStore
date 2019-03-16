<?php
include 'header.php';
?>

<?php

    //searchFilter.php
    $searchValue = $_GET['svalue'];

    include "db_connection.php";        

    $sql_querie = "SELECT Guitar_ID, Guitar_Articlenumber, Guitar_Brand, Guitar_Model, Guitar_Price, Guitar_Img, Guitar_Info FROM guitars WHERE Guitar_Brand LIKE '%".$searchValue."%'";
    
    $db_result = $conn->query($sql_querie);  

    if($db_result -> rowCount() == 0){
        echo "<h1>No results</h1>";
    }else{
        echo "<h1>Guitar available</h1>";
    }
    

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card debug">' .
        //link naar guitars.php + foto
            
              // '<a href="guitars.php?Guitar_ID=' . $row['Guitar_ID'] . '">' . '</a>' .
            '<h1>' . $row['Guitar_Brand']  . ' ' . $row['Guitar_Model'] .'</h1>' .
             
             '<h2 class="price">' .'€'. $row['Guitar_Price'] .',-'.'</h2>'.
             '<img src="' . $row['Guitar_Img'] . '" alt="' . $row['Guitar_Brand'] . '" style="width: 35%">' .
             
             // '</a>'.
            '</div>';
            // '<a href="guitar_info.php?id=' . $row['Guitar_ID'] . '">' .
       
    }  
        
     
 
        $conn = null;
  
?>

</body>
</html>
