<!DOCTYPE html>
<html lang="en">
	<?php Include 'Templates/head.html' ?>
    <style>
        div.img {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.img:hover {
            border: 1px solid #777;
        }

        div.img img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
	<body>
		<div class="container">
			
			<?php Include 'Templates/header.html' ?>
			
			<div class="main">
			
				<div class="left">
					
					<div class="content" id = "leftContent">
						
                        <h1>Title: Blood Metal Exorcism</h1>
                        <p>
                            BME is a First Person Shooter designed and developed by 13 students from the game assembly. This was our third project during the second year and our first project to include both physics and networking.
                            The project was developed for 9 weeks halftime with 4 programmers, 3 level designers, 3 artists and 2 technical artists. During this project I got to work with havok integration into our custom engine, 
                            synchornising enemies and players over the network using the RakNet socket library and also creating a wrapper to let us interact with FMOD via Lua.
                            </br>
                            The game was coded in C++ using a few third party tools including D3D11, FMOD, Lua, Havok and RakNet
                        </p>
                        </br>
                        <h2>
                            Click <a href="/GameDownloads/BloodMetalExorcism.exe" download>here</a> to download the game!
                        </h2>
                        </br></br>
                        <?php
                            for ($x = 1; $x <= 17; $x++) { 
                                echo "<a href=\"img/GameScreenshots/FPS/FPS_$x.png\"> <img src=\"img/GameScreenshots/FPS/FPS_$x.png\" width=\"150\" height=\"100\"></a>";
                            }
                        ?>
						
					</div>
				
				</div>

				<?php Include 'Templates/right.html' ?>
				
			</div>

			<?php Include 'Templates/footer.php' ?>
			
		</div>
	</body>
</html>
