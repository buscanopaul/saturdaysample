<?php require_once 'controllers/add.controller.php'; ?>
<?php include_once 'templates/header.php'; ?>



<div class="container">
        <div class="well bs-component col-md-6">
          <form class="form-horizontal" action="" method="POST">
            <fieldset>
              <legend align="center">ADD NEW RECORD!</legend>

              <div class="form-group is-empty">
                <label for="firstname" class="col-md-2 control-label">FIRSTNAME:</label>

                <div class="col-md-10">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname">
                </div>
              <span class="material-input"></span>
              </div>

              <div class="form-group is-empty">
                <label for="lastname" class="col-md-2 control-label">LASTNAME:</label>

                <div class="col-md-10">
                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">

                 
                </div>


              <span class="material-input"></span>
              </div>

               <div class="form-group is-empty">
                <label for="age" class="col-md-2 control-label">AGE:</label>

                <div class="col-md-10">
                  <input type="text" class="form-control" name="age" id="age" placeholder="Age">

                 
                </div>

              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  
                  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>