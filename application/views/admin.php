<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>DevForge - Home</title>
        <meta name="description" content="DevForge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href=<?php echo "\"" . base_url() . 'assets/' . "css/bootstrap.min.css\""; ?>>
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href=<?php echo "\"" . base_url() . 'assets/' . "css/bootstrap-theme.min.css\""; ?>>
        <link rel="stylesheet" href=<?php echo "\"" . base_url() . 'assets/' . "css/main.css\""; ?>>

        <script src=<?php echo "\"" . base_url() . 'assets/' . "js/vendor/modernizr-2.8.3.min.js\""; ?>></script>
    </head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">DevForge</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right" role="form">
                    <div class="form-group">
                        <input type="text" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
                <button href="/signup" class="navbar-right btn btn-success">Sign Up</button>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>

    <!-- Main jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome</h1>
            <p>DevForge is a place to host your projects. All projects are checked and approved by admins.</p>
            <p><a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1>Featured Projects</h1>
            <div class="col-md-4">
                <h2>Project #1</h2>
                <p></p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Project #2</h2>
                <p></p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Project #3</h2>
                <p></p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

        <footer>
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            <p>&copy; Spideynn 2016. Powered by <strong>DevForge</strong>.</p>
        </footer>
    </div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src=<?php echo "\"" . base_url() . 'assets/' . "js/vendor/bootstrap.min.js\""; ?>></script>

    <script src=<?php echo "\"" . base_url() . 'assets/' . "js/public/main.js\""; ?>></script>
</body>
</html>
