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
				$target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);

				$uploadOk = 1;

				$imageFileName = pathinfo($target_file, PATHINFO_FILENAME);
				$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"]))
				{
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

					if($check !== false)
					{
						$uploadOk = 1;
					}
					else
					{
						echo "File is not an image. ";

						$uploadOk = 0;
					}
				}

				// Check if file already exists
				if (file_exists($target_file))
				{
					echo "Sorry, file already exists. ";

					$uploadOk = 0;
				}

				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000)
				{
					echo "Sorry, your file is too large. ";

					$uploadOk = 0;
				}

				// Allow certain file formats
				if($imageFileType != "png")
				{
					echo "Only png files are allowed. ";

					$uploadOk = 0;
				}

				// Allow certain file formats
				if(strpos($imageFileName, ' ') > 0)
				{
					echo "Your filename contains whitespaces, Oscar. ";

					$uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0)
				{
					echo "Your file was not uploaded. ";
				}

				// if everything is ok, try to upload file
				else
				{
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
					{
						//Success
						echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";

						//Write sprite information into file
						$myfile = fopen("sprites.txt", "a") or die("Error, sprite info not added.");
						
						fwrite($myfile, $imageFileName);

						fwrite($myfile, "\r\n");

						fwrite($myfile, $_POST["frames"] . " ");
						fwrite($myfile, $_POST["offset_x"] . " " . $_POST["offset_y"]);

						fwrite($myfile, "\r\n");

						fclose($myfile);
					}
					else
					{
						//Failure
						echo "Sorry, there was an error uploading your file.";
					}
				}
			?>
		</div>
	</body>
</html>