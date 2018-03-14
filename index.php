<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans" rel="stylesheet">
    </head>

    <body>
        <div class="header">
            <span class="header-title">Brisbane Employment Projection</span>
        </div>
        <div class="main" id="main">
        <?php 
            if(!isset($_GET['action'])) {
                include 'includes/data-choice.php';
            }
        ?>
        <a class="return-button" href="index.php">Return</a>
        </div>
        <div class="footer">
            Joshua Lowe | Github
        </div>
    <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>
