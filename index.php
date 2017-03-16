<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PhSql test</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <h1>Sightwords webapp</h1>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" id="leftSidebar">
                <?php include 'php/scripts.php' ;?>
                Sidebar
            </div>
            <div class="col-md-6" id="formContainer">
                <!-- game canvas goes here -->
                <fieldset>
                    <form action="php/handleForm.php" method="post" id="thisForm">
                        <h2>hi</h2>
                        <input type="submit" value="click"/>

                    </form>
                </fieldset>
            </div>
            <div class="col-md-3" id="score">
                <h2>Score:</h2>
                <div id="scoreOutput">
                    <!-- score goes here -->
                </div>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
