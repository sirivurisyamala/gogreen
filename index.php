<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport"  content="width=device-width,initial-scale=1.0"/>
     <link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script> 
<script src="popper.min.js"></script> 
<script src="bootstrap.min.js"></script>
    
</head>
<body>

<div class="jumbotron m-4" style="background-image:linear-gradient(#eecda3,#ef629f);background-size:cover;">
<div class="row">
<div class="col-md-6">
 <img src="Images/photo.jpg" class="img-fluid rounded mx-auto d-block w-75" height="280px" width="220px" alt="Nature9"/>

</div>
<div class="col-md-6" >
<h3 class="text-center" style="color:green;">SIGNIN</h3>
<form action="signin.php" method="post">
                        <label for="email" style="color:green;font-size:20px">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required/>
						<br>
						
                        <label for="pwd" style="color:green;font-size:20px">Password</label>
                        <input  type="password" id="pwd" name="password" class="form-control"/> 
                        <div class="modal-footer">
                            <button class="btn btn-success" name="submit">signin</button>
                              <button class="btn btn-success" data-target="#signup" data-toggle="modal" data-backdrop="static">Signup</button>     
                        </div>                                                              
                    </form>

</div>
</div>
</div>



	
	
	
	<!--Code Implementation For Signup-->
    
    <div class="modal fade" id="signup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">SignUp</h3>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">      
<form action="registoration.php" name="registor" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="fname">FirstName</label>
                                <input type="text" id="fname" name="fname" class="form-control">
                            </div>
                            <div class="col">
                                <label for="lname">LastName</label>
                                <input type="text" id="lname" name="lname" class="form-control" >
                            </div>
                        </div>
						<div class="row">
						<div class="col">
                        <label for="mail">Email</label>
                        <input type="email" id="mail" name="email" class="form-control" >
						</div>
						<div class="col">
						<label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" >
						</div>
						</div>
						
                        <div class="row">
                        <div class="col">
                                 <label for="mobnumber">Mobile Number</label>
                                 <input type="number" id="mobnumber" name="mobnumber" class="form-control" >
                        </div>
                            <div class="col">
                                <label for="altnumber">Alternate Number</label>
                                <input type="number" id="altnumber" name="altnumber" class="form-control"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                  <div class="form-check-inline">
                                       <label class="form-check-label">Gender</label>
                                  </div>
                            </div> 
                            <div class="col">
                                 <div class="form-check-inline">
                                     <label class="form-check-label">
                                         <input type="radio" class="form-check-input" name="radio" value="female"/>Female
                                     </label>
                                 </div>
                            </div>  
                            <div class="col">
                                 <div class="form-check-inline">
                                       <label class="form-check-label">
                                           <input type="radio" class="form-check-input" name="radio" value="male"/>Male
                                       </label>
                                 </div>
                            </div> 
                                 						
                        </div>  
                         
                        <div class="modal-footer">
						
                            <button class="btn btn-success" name="submit">Submit</button>
                            <button class="btn btn-success" data-dismiss="modal">Close</button>       
                        </div>                            
                    
                </div>
            </div>
        </div>
    </div>
    <!--Code Ended For Signin-->




	
	<body>
	</html>