<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>PHP | MvC</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php Config::getUrl(); ?>/public/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php Config::getUrl(); ?>/public/assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php Config::getUrl(); ?>/public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php Config::getUrl(); ?>/public/assets/css/theme.css" rel="stylesheet">
    <link href="<?php Config::getUrl(); ?>/public/assets/css/styles.css" rel="stylesheet">
    <script src="<?php Config::getUrl(); ?>/public/assets/js/jquery-1.9.1.js"></script>
    <script src="<?php Config::getUrl(); ?>/public/assets/js/jquery.validate.min.js"></script>
    <script src="<?php Config::getUrl(); ?>/public/assets/js/bootstrap.min.js"></script>
    <script src="<?php Config::getUrl(); ?>/public/assets/js/docs.min.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="views/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php Config::getUrl(); ?>/public/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PhP | MvC</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php Config::getRootUrl(); ?>">Home</a></li>
                <li class=""><a href="<?php Config::getRootUrl(); ?>/pots/view">Post</a></li>
                <li class=""><a href="<?php Config::getRootUrl(); ?>/users/register">Register</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <?php $app = new App; ?>

</div> <!-- /container -->

<!-- javascript  -->

<script src="<?php Config::getUrl(); ?>/public/assets/js/custom.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php Config::getUrl(); ?>/public/assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
