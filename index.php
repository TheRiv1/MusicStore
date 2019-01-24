<?php
include 'header.php';
?>
<!--    -->
		<div class="nav debug">
		<ul>
			<li><a href="index.php">Guitars</a></li>
			<li><a href="">Bass</a></li>
			<li><a href="">Drums</a></li>
			<li><a href="">Keys</a></li>
		
			<form  class="form_search debug" action="searchFilter.php"  method="GET">
			<input class="input_field debug" name="svalue" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for...">
			 <button class="search_btn debug" type="submit" value="search">Search</button> 
			 </form>
		</ul>
	</div>

	<!--            -->
	<div class="cards debug">
		 <?php include "card.php"; ?>
	</div>


	</div>
	

</body>
</html>