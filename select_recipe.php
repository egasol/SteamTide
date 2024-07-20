<html>
	<body>
		<?php
			$fileRead = fopen("recipes.txt", "r") or die("File Error (Reading).");

			while(!feof($fileRead))
			{
				$line = fgets($fileRead);

				if ($line != "")
				{
					echo "<option value=" . $line . ">" . $line . "</option>";
				}
				
				fgets($fileRead);
				fgets($fileRead);
			}

			fclose($fileRead);
		?>
	</body>
</html>