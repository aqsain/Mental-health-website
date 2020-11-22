<!DOCTYPE html>
<html>
<head>
	<title>User Registeration Form</title>
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
        			<a class="nav-link" href="homepage-2.html">Home </a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="homepage-2.html">Quotes</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="homepage-2.html">Articles</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link " href="support.html">Support </a>
      			</li>
    		</ul>
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item">
       				<a class="nav-link" href="homepage-2.html">Contact us</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link active" href="#">Register with us<span class="sr-only">(current)</span></a>
      			</li>
    		</ul>
  		</div>
</nav>

<section class = "register">
  <div class = "container">
  	 <h1 class="con">User Registeration</h1>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
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