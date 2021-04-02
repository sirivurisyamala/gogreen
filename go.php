
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport"  content="width=device-width,initial-scale=1.0"/>
     <link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script> 
<script src="popper.min.js"></script> 
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">



    
</head>
<body>
<?php
session_start();
include("nav.php");
?>
  
	<marquee class="mt-5" style="background-color:#FF00FF;color:white;font-weight:100px;font-size:30px;">THANKS ! FOR CHOOSING GO-GREEN</marquee>
	
	<!-- Code For Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                
                <img src="Images/hand.jpg" height="440" class="d-block w-100" alt="Nature9"/>
            </div>
            <div class="carousel-item">
                
                <img src="Images/leaf.jpg" height="440" class="d-block w-100" alt="Nature2"/>
            </div>
            <div class="carousel-item">
                
               <img src="Images/caro2.png" height="440" class="d-block w-100" alt="Nature"/>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Code Ended For Carousel-->
	
	
	
   <!--code for marque -->
<a href="offer.php"><marquee style="background-color:#6A5ACD;color:white;font-weight:100px;font-size:35px;">TODAY OFFER 20%off</marquee></a>
	<!--Code Ended For marque-->
	
    <!--code for cards-->

    <div class="jumbotron">
	<div class="row">
	<div class="col-sm-3">
		<div class="content" <a href="#">
	 <div class="content-overlay"></div>
                      <img src="Images/indoor.jpeg" class="img-thumbnail card-img-top w-40 mt-2 mx-auto"   style="height:150px"  alt="indoor" />
					  <div class="content-details fadeIn-bottom">
					  <h3 class="content-title">indoor plants</h3>					   
                         <p class="content-text"><i class="fa fa-map-marker"></i><a class="text-warning" href="indoor.php">India</a></p>
						 </div>
                     </a></div>                                            
                    </div>
	
	<div class="col-sm-3">
	<div class="content" <a href="#">
	 <div class="content-overlay"></div>
                      <img src="Images/outdoor.jpg" class="img-thumbnail card-img-top w-40 mt-2 mx-auto"   alt="outdoor" style="height:150px" /></a>
                        <div class="content-details fadeIn-bottom">
                         <h3 class="content-title">Outdoor Plants </h3>
                         <p class="content-text"><i class="fa fa-map-marker"></i><a class="text-warning" href="outdoor.php">India</a> </p>
                     </div>
                    </a></div>
	</div>
	
	
	<div class="col-sm-3">
	<div class="content" <a href="#">
	 <div class="content-overlay"></div>
                   <img src="Images/seeds2.jpg" class="img-thumbnail card-img-top w-40 mt-2 mx-auto"   alt="outdoor" style="height:150px" />
                         <div class="content-details fadeIn-bottom">
						  <h3 class="content-title">Seeds</h3>
                           <p class="content-text"><i class="fa fa-map-marker"></i><a class="text-warning" href="seeds5.php">India</a></p>
                        </div>                   
	</a></div>
	</div>
	<div class="col-sm-3 mb-2">
	<div class="content" <a href="#">
	 <div class="content-overlay"></div>
                      <a href="tool5.php">  <img src="Images/tool.jpg" class="img-thumbnail card-img-top w-40 mt-2 mx-auto"   alt="tool" style="height:150px" /></a>                        
                        <div class="content-details fadeIn-bottom">
						  <h3 class="content-title">Tools</h3>
                           <p class="content-text"><i class="fa fa-map-marker"></i><a class="text-warning" href="tool5.php">India</a></p>
                        </div>
                    </a></div>
                </div>
				</div>
	</div>
	
	<!--Code Ended For Cards-->
	
	<?php
	include("footer.php");
	?>
	
	</body>
	</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	