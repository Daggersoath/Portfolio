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
						
                        <h1>Title: Tom Cruizer</h1>
                        <p>
                            Tom Cruizer is a Space Shooter game designed and developed by 13 students from the game assembly. This was our first project during the second year and was our first introduction to working with 3D games.
                            The project was developed for 10 weeks halftime with 4 programmers, 3 level designers, 3 artists and 2 technical artists. During this project I created a GUI library using Direct 2D to allow for easy creation
                            of buttons, labels and menus. To read menu and other GUI options I created a wrapper around tinyXML to read XML specified by the design documentation. During this time I also got to play around with writing
                            an algorithm to help the enemies target the player, this same algorithm was then also used for the player's aim assist.
                            </br>
                            The game was coded in C++ using a few third party tools including D3D11, FMOD and tinyxml
                         </p>
                        </br>
                        <h2>
                            Click <a href="/GameDownloads/TomCruizer.exe" download>here</a> to download the game!
                        </h2>
                        </br></br>
                        <?php
                            for ($x = 1; $x <= 3; $x++) { 
                                echo "<a href=\"img/GameScreenshots/SS/SS_$x.png\"> <img src=\"img/GameScreenshots/SS/SS_$x.png\" width=\"150\" height=\"100\"></a>";
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
