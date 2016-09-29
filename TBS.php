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
						
                        <h1>Title: Mechadin</h1>
                        <p>
                            Mechadin is a Turn Based Strategy game designed and developed by 11 students from the game assembly. This was our final project during the first year.
                            The project was developed for 8 weeks halftime with 4 programmers, 3 level designers and 4 artists. During this project my main responsability was to create a
                            simple level editor. I did this in C# and used C++ for the rendering via CLR. The idea for the level editor was to creat something simple that functioned similarly
                            to the editor that the level designers had previously used and give an easy to inturpret output for our game engine. I also spent a bit of time during this project
                            working on the menus using the already implemented GUI library.
                            </br>
                            The game was coded in C++ using a few third party tools including HGE, FMOD and tinyxml
                         </p>
                        </br>
                        <h2>
                            Click <a href="/GameDownloads/Mechadin.exe" download>here</a> to download the game!
                        </h2>
                        </br></br>
                        <?php
                            for ($x = 1; $x <= 4; $x++) { 
                                echo "<a href=\"img/GameScreenshots/TBS/TBS_$x.png\"> <img src=\"img/GameScreenshots/TBS/TBS_$x.png\" width=\"150\" height=\"100\"></a>";
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
