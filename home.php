<?php

session_start();
include 'db.php';



?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	 <div id="main">
	 	<h2>Hai!  <?php echo $_SESSION['name']?></h2>

	 	<div class="output">


	 		<?php 
	 		$sql = "SELECT * FROM posts";
	 		$results = $conn->query($sql);
	 		if ($results->num_rows >0) {
	 			while($row = $results->fetch_assoc()){
	 			echo "". $row["name"]." " . " :" . $row["msg"]."--".$row["date"]. "<br>";
	 			echo"<br>";
	 		}
	 		}else{
	 			echo"0 resuts";

	 		}
	 		$conn->close();




	 		?>
	 		
	 		



	 	</div>
	 	<form method="post" action="send.php">
	 		<textarea name="msg" placeholder="type your message..... " class="form-control"></textarea><br><br>
	 		<input type="submit" name="send" value="Send message"> 
	 	</form>
	 	<br>
	 	<form method="post" action="logout.php">
	   <input type="submit" name="logout" value="logout"> 		
	 		

	 	</form>







	 </div>

</body>
</html>