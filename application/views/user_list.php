<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="yogasmara">
    <title>Simple Crud With Codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="page-header text-center">Codeigniter simple CRUD tutorial</h1>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($users as $user){
              ?>
              <tr>
                <td><?php echo $user->id; ?></td>
                <td><?php echo $user->username; ?></td>
                <td><?php echo $user->password; ?></td>
                <td><?php echo $user->fname; ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit"></span> Edit
                  </a>
                    ||
                  <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" class="btn btn-danger">
                  <span class="glyphicon glyphicon-trash"></span>  Delete
                  </a>
                </td>
              </tr>
              <?php
            }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
