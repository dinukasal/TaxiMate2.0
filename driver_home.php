<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
        <link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/component_button.css" />
	   
    </head>
	<body class="spmenu-push"  style="width: 140%; height:140%">
        <div id="header">
            <div class="main" style="position: relative;"> 
                <button id="menuButton"  class="btn btn-1 btn-1a" style="position: absolute; left: -40px; top: -20px;"><img src="./img/menu.png"></button>
                <h>Taxi Mate</h>
                   
            </div>    
        </div>
                
		<nav class="spmenu spmenu-vertical spmenu-left" id="spmenu-s1">
			<h1>Menu</h1>
			<a href="driver_home.html">Home</a>
			<a href="driver_myprofile.html">Profile</a>
			<a href="driver_ratings.html">Ratings and Badges</a>
			<a href="driver_myrates.html">My Rates</a>
			<a href="driver_mytrips.html">My Trips</a>
			<a href="driver_support.html">Support</a>
			<a href="driver_aboutus.html">About Us</a>
		</nav>
        <div class="container">
			<div class="main">
                <h1  style="font-size: 4.0em;">Taxi requests</h1>
		     <br>
                <div class="listborder" style="font-size: 3.0em; position: relative;">
                   
                    <p style="position: absolute; left: 10px; top: 20px;">From :Charith</p>
                    <p style="position: absolute; left: 10px; top: 80px;">To   :Piliyandala</p><br><br>
                    <button class="btn btn-6 btn-6l" id="acceptbutton"  style="position: absolute; left: 600px; top: 40px" >Accept</button>
                    <button class="btn btn-6 btn-6l" id="declinebutton" style="position: absolute; left: 600px; top: 160px">Decline</button>
                    

                    
                </div>
                <br>
                <div class="listborder" style="font-size: 3.0em; position: relative;">
                    
                    <p style="position: absolute; left: 10px; top: 20px;">From :Dinuka</p>
                    <p style="position: absolute; left: 10px; top: 80px;">To   :Athurugiriya</p>
                    <button class="btn btn-6 btn-6l" id="acceptbutton"  style="position: absolute; left: 600px; top: 40px" >Accept</button>
                    <button class="btn btn-6 btn-6l" id="declinebutton" style="position: absolute; left: 600px; top: 160px">Decline</button
                    
                   
                </div>
                <br> 
            	</div>
		</div>
         <?php  
        		session_start();
        		if(isset($_SESSION['contactNo'])){
	        		$contactNo=$_SESSION['contactNo'];
        		}
				echo "<script>var contactNo=".$contactNo.'</script>';
        ?>
        
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'spmenu-s1' ),
				menuButton = document.getElementById( 'menuButton' ),
				body = document.body;

			menuButton.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'spmenu-push-toright' );
				classie.toggle( menuLeft, 'spmenu-open' );
				disableOther( 'menuButton' );
			};
		</script>
	</body>
</html>
