<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans" rel="stylesheet">
        <script src="js/script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="header">
            <span class="header-title">Brisbane Employment Projection</span>
        </div>
        <div class="navigation"> 
            <span href="" id="data-selection"><a class="link" href="index.php">Data Selection</a></span> >
            <span href="" id="location-selection">Location</span> >
            <span href="" id="specific-selection">Occupation/Industry</span>        
        </div>
        <div class="main" id="main">
            <?php 
                if(!isset($_GET['action'])) {
                    include 'includes/data-choice.php';
                    echo '<script type="text/javascript">setNavbar(0);</script>';
                } else {
                    echo '<script type="text/javascript">setNavbar(1);</script>';
                }
            ?>
        </div>
        <div class="footer">
            Joshua Lowe | <a class="link" href="https://github.com/lowejosh/brisbane-employment-projection">Github</a>
        </div>
    </body>
</html>
