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
            <span class="sub-title">Would you like to</span>
            <div class="center-wrap">
                <form>
                    <button type="submit" class="choice-button" onClick="choiceClicked(0)">
                        <span class="choice-text">View occupation employment projection</span>
                    </button>
                    <button type="submit" class="choice-button" id="industryButton" onclick="choiceClicked(1)"> 
                        <span class="choice-text">View industry employment projection</span>
                    </button>
                    <!-- The hidden input is given its value via javascript when a choice div is clicked, then the form is submitted -->
                    <div id="hiddenInput"></div>
                </form>
            </div>
        </div>
        <div class="footer">
        </div>
    <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>
