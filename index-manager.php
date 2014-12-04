<?php	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (isset($_POST['btn-feature-3'])) {
				$file = fopen("index/title-3.txt", "w+"); 
				fwrite($file, $_POST['title-3']);
				fclose($file);
				
				$file = fopen("index/content-3.html", "w+"); 
				fwrite($file, $_POST['content-3']);
				fclose($file);
			} else {
				//assume btnSubmit
			}
		}
?>

<form action="index-manager.php" id="feature-3" method="post">
 <h1>Feature 3</h1>
 <p>Title <input type="text" name="title-3" value="<?php include "index/title-3.txt" ?>" /></p>
 <p>Content <textarea name="content-3" form="feature-3" /><?php include "index/content-3.html" ?></textarea>
 <p><input type="submit" name="btn-feature-3" /></p>
</form>

<script>
  alert("<?php include "index/title-3.txt" ?>");
</script>