<html>
    <head>
        <title>STEAM TIDE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
        <!---------------------------------------------------------------------->
        <div id="container">
            <p class="subheading">STEAM TIDE</p>

            <form>
                <input type="button" value="Back" onclick="window.location.href='index.php'">
            </form>

            <?php
                $myfile = fopen("recipes.txt", "a") or die("Error, recipe not added.");

                fwrite($myfile, $_POST["sprite1_combine"] . "[" . $_POST["animation1_combine"] . "]");
                fwrite($myfile, $_POST["sprite2_combine"] . "[" . $_POST["animation2_combine"] . "]");
                fwrite($myfile, "\r\n");
                fwrite($myfile, $_POST["sprite1_result"] . "[" . $_POST["animation1_result"] . "]");
                fwrite($myfile, $_POST["sprite2_result"] . "[" . $_POST["animation2_result"] . "]");

                if ($_POST["sprite_create"] !== "")
                {
                    fwrite($myfile, $_POST["sprite_create"] . "[" . $_POST["animation_create"] . "]");
                }

                fwrite($myfile, "\r\n\r\n");

                fclose($myfile);

                echo "Recipe added.";
            ?>
        </div>
    </body>
</html>