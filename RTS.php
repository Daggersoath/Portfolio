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
						
                        <h1>Title: Techno Titans</h1>
                        <p>
                            Techno Titans is a Real Time Strategy game designed and developed by 13 students from the game assembly. This was our second project during the second year and was our first introduction to working with AI
                            in games. The project was developed for 10 weeks halftime with 4 programmers, 3 level designers, 3 artists and 2 technical artists. During this project I got to work with creating and designing an AI to play
                            against the player using influence maps. The AI would use multiple influence maps for monotoring hot spots on the map including, spotted player units, death locations, capture points and its own units. Based
                            on the value from these maps it sends units to capture, attack or defend different points on the map. I also got to work with the scripting creating an interface for our level designers to interact with the
                            game. Using this they were able to design events and features to their hearts content. 
                            </br>
                            The game was coded in C++ using a few third party tools including D3D11, FMOD and Lua
                         </p>
                        </br>
                        <h2>
                            Click <a href="/GameDownloads/TechnoTitans.exe" download>here</a> to download the game!
                        </h2>
                        </br></br>
                        <?php
                            for ($x = 2; $x <= 19; $x++) { 
                                echo "<a href=\"img/GameScreenshots/RTS/RTS_$x.jpg\"> <img src=\"img/GameScreenshots/RTS/RTS_$x.jpg\" width=\"150\" height=\"100\"></a>";
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
