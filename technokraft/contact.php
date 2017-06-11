<!DOCTYPE html>
<html lang="en">
	<?php readfile('partials/headerScripts.html');?>
	<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
	
	<body class="container-fluid" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<!--TODO make the other page load a ajax load eleminating the extra pages.-->	
		<?php 
			readfile('partials/navbar.html');
			include('partials/contactContent.php');
			readfile('partials/map.html');
			readfile('partials/footerScripts.html');
			?>
	</body>
	
</html>
