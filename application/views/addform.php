<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Yogasmara">
    <title>Add new data</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="page-header text-center">Codeigniter Simple CRUD Tutorial</h1>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <h3>
            Add Form
            <span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
          </h3>
          <hr>
          <form action="<?php echo base_url(); ?>index.php/users/insert" method="post">
            <div class="form-group">
              <label>Username :</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
              <label>Fullname :</label>
              <input type="text" class="form-control" name="fname">
            </div>
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
