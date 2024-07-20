<html>
    <head>
		<title>Steam Tide</title>
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
		<?php include "header.html" ?>

        <div class="bordered">
			<table>
				<?php
					$images = glob("uploads/*.png");

					foreach($images as $image)
					{
						echo "<tr>"; 
						echo "<td>" . pathinfo($image, PATHINFO_FILENAME) . "</td>";
						echo "<td><img src='" . $image . "'/></td";
						echo "</tr>";
					}
				?>
			</table>
        </div>
    </body>
</html>