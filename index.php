<?php require_once 'controllers/home.controller.php'; ?>
<?php include_once 'templates/header.php'; ?>






<div class="container" >



		<div>
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sample Table</h1>

        <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By: Paul lorenz Buscano</p>
      </div>

      
       <a href="add.php" name="add.php" class="btn btn-raised btn-info">ADD NEW!</a>

  <div class="page-header" id="banner" >
    <div class="row">
      
      <div class="col-sm-6">
        <div class="well infobox">
			        	<table class="table table-striped">
			    <thead>
			      <tr>
			       	<th>ID</th>
			        <th>FIRSTNAME</th>
			        <th>LASTNAME</th>
			        <th>AGE</th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php if(empty($user)): ?>
			    	<?php foreach ($users as $user): ?>

			<form action="" method="POST">
			      <tr>
			        <td><?php echo $user['id']; ?></td>
			        <td><input required   type="text" class="form-control" name="firstname" value="<?php echo $user['firstname']; ?>"</td>
			        <td><input required    type="text" class="form-control" name="lastname" value="<?php echo $user['lastname']; ?>"</td>
			        <td><input required  type="text" class="form-control" name="age" value="<?php echo $user['age']; ?>"</td>



					 <td><button type="submit" onclick="return confirm('Are you sure you want to update record ?');" name="update" class="btn btn-raised btn-warning">EDIT</button></td>
			  
			  		<td><button type="submit" onclick="return confirm('Are you sure you want to delete record ?');" name="delete" class="btn btn-raised btn-danger">DELETE</button></td>

			      </tr>

			       <input type="hidden" name="id" name="id"value="<?php echo $user['id'];?>">

			 


			  </form>

			  <?php endforeach; ?>
			<?php endif; ?>
			     	
			    </tbody>
			  </table>
        </div>
      </div>
    </div>
  </div>

 </div>