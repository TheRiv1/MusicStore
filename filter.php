<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filter</title>
</head>
<body>

	<?php
	$g_id = $_GET['search'];

	function searchGuitarId($g_id, $conn) {
  $query    = "SELECT Guitar_ID, Guitar_Articlenumber, Guitar_Brand, Guitar_Model, Guitar_Price, Guitar_Img, Guitar_Info FROM `guitars` WHERE `Guitar_ID` = '$g_id'";
  $guitars = mysqli_query($conn, $query);

  return ($guitars) ? $guitars : [];
}
	?>

</body>
</html>