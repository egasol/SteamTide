<html>
    <head>
		<title>Steam Tide</title>
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
		<?php include "header.html" ?>

		<div class="bordered">
			<?php
				$recipeName = $_POST["removerecipe_combine"];
				$password = $_POST["removerecipe_password"];

				$fileName = "recipes.txt";

				echo $recipeName . "<br>";

				if ($password == "iFuckedUp")
				{
					$output = array();
					$found = 0;

					//----------------------------Read From File-----------------------------------

					$fileRead = fopen($fileName, "r") or die("File Error (Reading).");

					$i = 0;
					
					while(!feof($fileRead))
					{
						$line = fgets($fileRead);

						if ($line == $recipeName . "\r\n" || $line == $recipeName . "\n")
						{
							echo $recipeName . " found at line: " . $i . " in " . $fileName . "<br>";

							fgets($fileRead);
							fgets($fileRead);

							$found = 1;
						}
						else
						{
							$output[] = $line;
							$output[] = fgets($fileRead);
							$output[] = fgets($fileRead);
						}

						$i++;
					}
					
					fclose($fileRead);
					/*
					echo "<br><br><br>";

					foreach($output as $line)
					{
						echo $line . "<br>";
					}
					*/
					
					//-----------------------------Write To File--------------------------------
					if ($found == 1)
					{
						$fileWrite = fopen($fileName, "w") or die("File Error (Writing). <br>");

						foreach($output as $line)
						{
							fwrite($fileWrite, $line);
						}

						fclose($fileWrite);

						echo "Removed " . $recipeName . " from " . $fileName . ". <br>";

					}
					else echo "Did not find " . $recipeName . " in " . $fileName . ". <br>";
				}
				else echo "Wrong password."
			?>
		</div>
	</body>
</html>