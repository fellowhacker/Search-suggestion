<?php

	$con = mysqli_connect('localhost', 'root', '', 'autosearch');

	if(isset($_POST['name'])) {

		$name = mysqli_real_escape_string($con, $_POST['name']);
		$name = addslashes($name);
		$query = "SELECT * FROM users WHERE username LIKE '%{$name}%'";
		$run_query = mysqli_query($con, $query);
		 
		while($rows = mysqli_fetch_array($run_query)) {

			 ?> <li onclick="append(' <?php echo  $rows['username']; ?>'); "> <?php echo  $rows['username']; ?> </li>

			
<?php

		}
		 

	}

?>

