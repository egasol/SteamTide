<html>
    <head>
		<title>Total Knight</title>
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
		<?php include "header.html" ?>

		<div class="bordered">
			<?php
				$spriteName = $_POST["removesprite_name"];
				$password = $_POST["removesprite_password"];

				if ($password == "iFuckedUp")
				{
					$output = array();
					$found = 0;

					//----------------------------Read From File-----------------------------------

					$fileRead = fopen("sprites.txt", "r") or die("File Error (Reading).");

					$i = 0;

					while(!feof($fileRead))
					{
						$line = fgets($fileRead);

						if ($line == $spriteName . "\r\n")
						{
							echo $spriteName . " found at line: " . $i . " in sprites.txt<br>";
							
							$line = fgets($fileRead);

							$found = 1;
						}
						else
						{
							$output[] = $line;
						}

						$i++;
					}

					fclose($fileRead);

					//-----------------------------Write To File--------------------------------
					if ($found == 1)
					{
						$fileWrite = fopen("sprites.txt", "w") or die("File Error (Writing). <br>");

						foreach($output as $line)
						{
							fwrite($fileWrite, $line);
						}

						fclose($fileWrite);

						echo "Removed " . $spriteName . " from sprites.txt. <br>";

						//--------------------------Remove Image----------------------------------
						$path = "uploads/" . $spriteName . ".png";

						if (file_exists($path))
						{
							unlink($path);

							echo $filename . ".png has been deleted. <br>";
						}
						else
						{
							echo "Could not delete " . $path . ", file does not exist";
						}
					}
					else echo "Did not find " . $spriteName . " in sprites.txt. <br>";
				}
				else echo "Wrong password."
			?>
		</div>
	</body>
</html>