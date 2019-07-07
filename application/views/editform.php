<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Yogasmara">
    <title>Edit Form</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="page-header text-center">Codeigniter simple CRUD tutorial</h1>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <h3>
            Edit Form
            <span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
          </h3>
          <hr>
          <?php extract($user); ?>
          <form action="<?php echo base_url(); ?>index.php/users/update/<?php echo $id; ?>" method="post">
            <div class="form-group">
              <label>Username :</label>
              <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
              <label>Password :</label>
              <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
            </div>
            <div class="form-group">
              <label>Fullname :</label>
              <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
