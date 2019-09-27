<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<title>Agregar Usuario</title>
	</head>
<body>

 <?php echo form_open('Master/insert_usuario');?>
<span class="help-block"></span>
<div class="container">
<div class="panel">
<div class="panel-heading">
    <h1 class="text-center">User Registration</h1>
</div>
  <div class="panel-body" style="background: ">
<form class="form-horizontal">
<br>
<br>
<div class="row">
  <div class="col-md-12">
  <label for="inputNombre">Name</label>
  </div>
  <div class="col-md-6">
       
         
         <input type="text" class="form-control" name="Nombre" required="">
         <label class="text-muted">First</label>
  </div>
  <div class="col-md-6" align="">
         
         <input type="text" class="form-control" name="Nombrelast" required="">
         <label class="text-muted">Last</label>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-12">
    <label for="inputPassword">Password</label>
  </div>
  <div class="col-md-6">
       
        
         <input type="Password" class="form-control"  name="Password" required="">
         <label class="text-muted">Enter Password</label>
  </div>
  <div class="col-md-6">
      
         <input type="text" class="form-control"  placeholder="" name="" >
         <label class="text-muted">Confirm Password</label>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-12">
     <label for="inputEmail">Email Address</label>
  </div>
  <div class="col-md-6">
        
         <input type="email" class="form-control"  placeholder="billy@example.com" name="Email" required="">
         <label class="text-muted">Enter Email</label>
  </div>
  <div class="col-md-6">
      
         <input type="text" class="form-control">
         <label class="text-muted">Confirm Email</label>
  </div>
</div>
<br>
<br>
<div class="row">
<div class="col-md-6">
    <label for="exampleFormControlFile1">Avatar</label>
    <input type="file" class="form-control-file" placeholder="Choose File">
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-12">
       
         <label for="inputSite">Web site</label>
         <input type="text" class="form-control"  placeholder="http://example.com" name="Website" required="">
     
  </div>
</div>
<br>
<br>
  <div class="row">
  <div class="col-md-12">
      
         <label for="inputBio">My Bio</label>
        <textarea class="form-control" name="bio" rows="6" placeholder="This is the bio the perfile page in the Admin." required=""></textarea>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-6">
       
          <div class='btn-group btn-group-sm'>
         
          <button type="submit" class="btn btn-default" name="insert">Save Profile</button>
          </div>
           
  </div>
  <div class="col-md-6">

  <?php 
  if(@$message!='')
    echo @$message;
  ?>
  </div>
</div>
</div>
</form>
</div>
</div>

</body>

</html>