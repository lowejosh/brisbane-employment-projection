<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans" rel="stylesheet">
        <script src="js/script.js" type="text/javascript"></script>
    </head>

    <body>
        <?php include 'includes/header.php';?>
		<?php 
			if(!isset($_GET['action'])) {
				include 'includes/data-choice.php';
				echo '<script type="text/javascript">setNavbar(0);</script>';
			} else {
				include 'includes/location-choice.php';
				echo '<script type="text/javascript">setNavbar(1);</script>';
			}
			include 'includes/footer.php';
		?>
    </body>
</html>
