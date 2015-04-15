<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Hackathon App</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="js/elasticsearch.jquery.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Latest compiled and minified bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- dialog box -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!--facebook javascript sdk-->
    <script src="//connect.facebook.net/en_US/sdk.js"></script>

    <!-- Lato Font-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- style! -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- scripts -->
    <script src="js/utils.js" type="text/javascript"></script>
    <script src="coffee/main.js" type="text/javascript"></script>
    <!--<script src="js/groups_main.js" type="text/javascript"></script>-->
    <!--<script src="js/notify_main.js" type="text/javascript"></script>-->

</head>
<body>

<div class="wrapper">
    <div id="fb-root"></div>
    <div class="navbar navbar-inverse navbar-fixed-top" id="bgf-navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">App Name</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#page1">Notify</a></li>
                    <li><a href="#page2">About</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <div id="page" class="container body">
        <!-- content loaded dynamically -->
    </div>



</div>
</body>
</html>