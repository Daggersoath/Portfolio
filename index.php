<!DOCTYPE html>
<html lang="en">
	<?php Include 'Templates/head.html' ?>
    <script>
        function Redirect() {
            window.location='http://alextheprog.me/AboutMe.php';
        }
    </script>
	<body onload="Redirect()">
		<div class="container">
			
			<?php Include 'Templates/header.html' ?>
			
			<div class="main">
			
				<div class="left">
					
					<div class="content" id = "leftContent">
					</div>
				
				</div>

				<?php Include 'Templates/right.html' ?>
				
			</div>

			<?php Include 'Templates/footer.php' ?>
			
		</div>
	</body>
</html>
