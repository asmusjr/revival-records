<?php	if(isset($_POST['name'])) {
			echo "You entered something.";
			
			$fn = "index/title-3.txt"; 
			$file = fopen($fn, "w+"); 
			$size = filesize($fn);

			// if($_POST['addition']) fwrite($file, $_POST['addition']);
			fwrite($file, $_POST['name']);

			fclose($file);
		} else {
			echo "Welcome."
		}
		
		echo "<br>";
		include 'index/title-3.txt';
?>

<form action="index-manager.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>