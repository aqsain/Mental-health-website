<!DOCTYPE html>
<html>
<head>
	<title>Doctor
   Registeration Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class ="header" id="topheader">
 	<nav class="navbar navbar-expand-lg fixed-top">
  	<div class ="container p-2">
  		<a class="navbar-brand font-weight-bold text-white" href="#">Mental Health</a>
 	 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item ">
        			<a class="nav-link" href="homepage-2.php">Home </a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="homepage-2.php">Quotes</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="homepage-2.php">Articles</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link " href="support.php">Support </a>
      			</li>
    		</ul>
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item">
       				<a class="nav-link" href="homepage-2.php">Contact us</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link active" href="#">Register with us<span class="sr-only">(current)</span></a>
      			</li>
    		</ul>
  		</div>
</nav>

<section class = "register">
  <div class = "container">
  	 <h1 class="con">Support Doctor Registeration</h1>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Doctor's Name</label>
				<input type="text" name="name" autocomplete="off" class="form-control">
			</div>
      <div class="form-group">
        <label>Specilization</label>
        <input type="text" name="specilization" autocomplete="off" class="form-control">
      </div>
       <div class="form-group">
        <label>Website link</label>
        <input type="text" name="link" autocomplete="off" class="form-control">
      </div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
      <div class="form-group">
        <label>Clinic Address</label>
        <input type="text" name="Address" autocomplete="off" class="form-control">
      </div>
		<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>
</section>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
