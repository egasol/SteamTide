<html>
	<head>
		<title>Steam Tide</title>
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="preview.js"></script>
	</head>

	<body>
		<?php include "header.html" ?>

        <!--Upload Sprites-->
        <div class="bordered">
            <p class="subheading">UPLOAD SPRITE</p>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<table>
					<td>
						<table>
							<tr>
								<td>Select image:</td>
								<td><input type="file" onchange="previewFile()" name="fileToUpload" value="Choose File"></td>
							</tr>
							<tr>
								<td>Frames:</td>
								<td><input type="number" name="frames" min="1" value="1"></td>
							</tr>
							<tr>
								<td>OriginX</td>
								<td><input type="number" name="offset_x" value="0" id="originX"></td>
							</tr>
							<tr>
								<td>OriginY</td>
								<td><input type="number" name="offset_y" value="0" id="originY"></td>
							<tr>
						</table>
					</td>
					<td>
						<img src="" onclick="mousePosition()" id="preview_image">
					</td> 
				</table>

				
				<input type="submit" value="Upload Image" name="submit_upload">
            </form>
        </div>
        
        <!--Add Recipe-->
        <div class="bordered">  
            <p class="subheading">ADD RECIPE</p>
            <form action="recipes.php" method="post">
                <!---------------------combine----------------------->
                Combine<br>
                <select name="sprite1_combine">
                    <option value="empty">empty</option>
                    <?php include('select_sprite.php') ?>
                </select>

                <input type="number" name="animation1_combine" value="0">
                +
                <select name="sprite2_combine">
                    <option value="empty">empty</option>
                    <?php include('select_sprite.php') ?>
                </select>
                
                <input type="number" name="animation2_combine" value="0">

                <br>

                <!----------------------result----------------------->
                Result<br>
                <select name="sprite1_result">
                    <option value="empty">empty</option>
                    <?php include('select_sprite.php') ?>
                </select>

                <input type="number" name="animation1_result" value="0">
                +
                <select name="sprite2_result">
                    <option value="empty">empty</option>
                    <?php include('select_sprite.php') ?>
                </select>
                
                <input type="number" name="animation2_result" value="0">

                <!----------------------create----------------------->
                <br>Create(optional)<br>
                <select name="sprite_create">
                    <option value=""></option>
                    <?php include('select_sprite.php') ?>
                </select>

                <input type="number" name="animation_create" value="0">

				<!----------------------submit----------------------->
				<br><br>
                <input type="submit" name="submit_add_recipe" value="Add Recipe">
            </form>
        </div>

        <!--Link Animation-->
        <div class="bordered">
            <form action="" method="">
                <p class="subheading">LINK ANIMATION</p>
                Move:
                <select name="animation_move">
                    <?php include('select_sprite.php') ?>
                </select>
                Strike:
                <select name="animation_strike">
                    <option value="empty">empty</option>
                    <?php include('select_sprite.php') ?>
                </select>
                Carry:
                <select name="animation_carry">
                    <option value="empty">empty</option>
                    <?php include('select_sprite.php') ?>
                </select>
                Corpse:
                <select name="animation_corpse">
                    <option value="empty">empty</option>
                    <?php include('select_sprite.php') ?>
                </select>
				<br><br>
                <input type="submit" name="link animation" value="Link Animation">
            </form>
        </div>
        
        <!--Link Behavior-->
        <div class="bordered">
            <p class="subheading">LINK BEHAVIOR</p>
            <form action="" method="">
                Sprite:
                <select name="behavior_sprite">
                    <?php include('select_sprite.php') ?>
                </select>
                Behavior:
                <select name="behavior_script">
                    <option value="BehaviorGrow">Grow</option>
                    <option value="BehaviorWander">Flee</option>
                    <option value="BehaviorAggressive">Aggressive</option>
                </select>
                Timer:
                <input type="number" name="behavior_timer" min="60" max="6000" value="120">
				<br><br>
                <input type="submit" name="behavior_submit" value="Link Behavior">
            </form>
        </div>

        <!--Link Stats-->
        <div class="bordered">
            <p class="subheading">LINK STATS</p>
            <form action="" method="">
                Sprite:
                <select name="stats_sprite">
                    <?php include('select_sprite.php') ?>
                </select>
                Health:
                <input type="number" name="stats_health" min="1" value="10">
                Damage:
                <input type="number" name="stats_damage" min="0" value="1">
                Speed
                <input type="range" name="stats_speed" min="1" max="8" value="1">
				<br><br>
                <input type="submit" name="stats_submit" value="Link Stats">
            </form>
        </div>


        <!--Add Weapon-->
        <div class="bordered">
        	<p class="subheading">ADD WEAPON</p>
            <form action="" method="">
                Sprite:
                <select name="weapon_sprite">
                    <?php include('select_sprite.php') ?>
                </select>
                Damage:
                <input type="number" name="weapon_damage" min="1" max="100" value="1">
                Range:
                <input type="range" name="weapon_range" min="24" max="640" value="1">
                Projectile:
                <select name="weapon_projectile">
                    <option value="empty">empty</option>
                    <?php include('select_sprite.php') ?>
				</select>
				<br><br>
                <input type="submit" name="weapon_submit" value="Add Weapon">
            </form>
		</div>
		
        <!--Map Generator-->
        <div class="bordered">
        	<p class="subheading">MAP SPAWNER</p>
            <form action="" method="">
                Sprite:
                <select name="map_sprite">
                    <?php include('select_sprite.php') ?>
                </select>
                Density:
				<input type="range" name="map_density" min="1" max="100" value="120">
				<br><br>
                <input type="submit" name="mep_submit" value="Add">
            </form>
        </div>
	</body>
</html>