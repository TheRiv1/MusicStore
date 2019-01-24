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
			<br>
			<div class="searchbar">
				<form action="searchFilter.php"  method="GET">
			<input name="svalue" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for...">
			 <button type="submit" value="search">Search</button> 
			 </form>
		</div>


		</ul>
		

	</div>

	<!--            -->
	<div class="cards debug">
		 <?php include "card.php"; ?>
	</div>


	</div>
	

</body>
</html>