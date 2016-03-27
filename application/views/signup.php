<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <?php if ($this->session->flashdata('error') != null) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error:</strong> <?php echo $this->session->flashdata('error'); ?> <br/>
        <?php if(ENVIRONMENT !== "production") { ?>
        <strong> Login Trace: <?php echo $this->aauth->print_errors(); ?> </strong>
        <?php } ?>
    </div>
    <?php } ?>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h1 style="font-size: 200%;">Login</h1>
                <h2>Project #1</h2>
                <p></p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                <br/>
                <form action=<?php echo "\"" + site_url() + "/auth/signup\""; ?> method="post" class="form-horizontal">
                <fieldset>

                <legend>Sign Up</legend>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Username</label>
                  <div class="col-md-4">
                  <input id="textinput" name="textinput" type="text" placeholder="example" class="form-control input-md" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">Email</label>
                  <div class="col-md-4">
                  <input id="email" name="email" type="text" placeholder="example@example.com" class="form-control input-md" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Password</label>
                  <div class="col-md-4">
                    <input id="passwordinput" name="passwordinput" type="password" placeholder="********" class="form-control input-md" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="confirmemail">Confirm Password</label>
                  <div class="col-md-4">
                  <input id="confirmpass" name="confirmpass" type="password" placeholder="********" class="form-control input-md" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="tos"></label>
                  <div class="col-md-4">
                  <div class="checkbox">
                    <label for="tos-0">
                      <input type="checkbox" name="tos" id="tos-0" value="1">
                      I agree to the <a href="/about/tos">Terms of Service</a>.
                    </label>
                	</div>
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="signup"></label>
                  <div class="col-md-4">
                    <button id="signup" name="signup" class="btn btn-success">Sign Up</button>
                  </div>
                </div>

                </fieldset>
                </form>
