<!DOCTYPE html>
<html>
<head>
    
    <style>
	.ss{
		
		background-image:linear-gradient(white,#90EE90);
		
	}
	ul li:hover{
		
		border:1px solid #8B0000;
		border-radius:30px;
	}
	.mm:hover{
		border:1px solid #8B0000;
	}
	
	</style>
</head>
<body>
<?php
session_start();
?>
    <nav class="navbar navbar-expand-sm navbar-dark bg-success fixed-top ss">
        <a class="navbar-brand" href="#">
            <img src="Images/logo4.jpg" class="img-thumbnail mm"  width="80" alt="Nature" />
        </a>
        <button class="navbar-toggler"  data-target="#nav-content" data-toggle="collapse"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="nav-content">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="go.php" style="color:#8B0000;font-size:25px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php" style="color:#8B0000;font-size:25px;">AboutUs</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="Services.php" style="color:#8B0000;font-size:25px;">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact me.php" style="color:#8B0000;font-size:25px;">ContactUs</a>
                </li>
            </ul>
        </div>
		
       <button class="btn btn-primary m-1 rounded-circle" ><a href="logout.php" style="color:white;text-decoration:none">logout</a></button>
    </nav>
	</body>
	</html>