<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <?php if ($this->session->flashdata('error') != null) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error:</strong> Your username or password was incorrect. <br/>
        <?php if(ENVIRONMENT !== "production") { ?>
        <strong> Tracelog: <?php echo $this->aauth->print_errors(); ?> </strong>
        <?php } ?>
    </div>
    <?php } ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 style="font-size: 200%;">Welcome</h1>
            <p>DevForge is a place to host your projects. All projects are checked and approved by admins.</p>
            <p><a class="btn btn-primary btn-lg" href="about" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <h1 style="font-size: 200%;">Featured Projects</h1>
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
