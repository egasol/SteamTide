<html>
	<head>
		<title>Steam Tide</title>
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="preview.js"></script>
	</head>

	<body>
        <?php include "header.html" ?>

        <div class="bordered">
            <p class="subheading">REMOVE SPRITE</p>

            <form action="remove_sprite.php" method="post">
				Sprite:
                <select name="removesprite_name">
                    <?php include('select_sprite.php') ?>
                </select>

				Password:
				<input type="password" name="removesprite_password">
				<br><br>
				<input type="submit" name="removesprite_submit" value="Remove Sprite">
            </form>
        </div>

		<div class="bordered">
            <p class="subheading">REMOVE RECIPE</p>

            <form action="remove_recipe.php" method="post">
				Recipe:
                <select name="removerecipe_combine">
                    <?php include('select_recipe.php') ?>
                </select>

				Password:
				<input type="password" name="removerecipe_password">
				<br><br>
				<input type="submit" name="removerecipe_submit" value="Remove Recipe">
            </form>
        </div>
	</body>
</html>