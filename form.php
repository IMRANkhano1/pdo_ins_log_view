<!DOCTYPE html>
<html>
<head>

	<title></title>
	 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<form method="post" action="log.php">

				<div class="form-group">
					
				
				<label class="form-lable">Name</label>
				<input type="text" class="form-control" name="sname" placeholder="enter your name" required>
			</div>
  				<div class="form-group">
					
				
				<label class="form-lable">password</label>
				<input type="password" class="form-control" name="pass" placeholder="enter your password" required>
			</div>
            <div class="form-group">
            	<input type="submit" class="btn btn-success" name="submit" >
            	<input type="reset" class="btn btn-danger" name="reset" >
            	<a href="view.php" class="btn btn-warning" name="view">View</a>
            	
            	
            </div> 				
  			</form>
  		</div>
  			
  		</div>
  	
  </div>
</body>
</html>