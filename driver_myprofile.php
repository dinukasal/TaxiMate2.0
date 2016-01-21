<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
        <link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/component_button.css" />
	   
    </head>
	<body class="spmenu-push" style="width: 140%; height:140%">
        <div id="header">
            <div class="main" style="position: relative;"> 
                <button id="menuButton"  class="btn btn-1 btn-1a" style="position: absolute; left: -40px; top: -20px;"><img src="./img/menu.png"></button>
                <h>My Profile</h>
                <button id="editButton"  class="btn btn-1 btn-1a" style="position: absolute; left: 800px; top: -20px;" onclick="location.href='driver_editProfile.html';"><img src="./img/edit.png"></button>   
            </div>    
        </div>
                
		<nav class="spmenu spmenu-vertical spmenu-left" id="spmenu-s1">
			<h3>Menu</h3>
			<a href="driver_home.html">Home</a>
			<a href="driver_myprofile.html">Profile</a>
			<a href="driver_ratings.html">Ratings and Badges</a>
			<a href="driver_myrates.html">My Rates</a>
			<a href="driver_mytrips.html">My Trips</a>
			<a href="driver_support.html">Support</a>
			<a href="driver_aboutus.html">About Us</a>
		</nav>
		<div class="container" style="position: absolute; left: 100px;">
                <img border="0" src="./img/icon-profile.png" alt="Profile Picture" width="304" height="228" /><br>
                <form method="post" action="./updateuser">
                    <lable>Name</lable><br><br><br><br>
                    <input type="text" id="firstName" name="firstName" value="" readonly>
                    <input type="text" id="lastName" name="lastName" value="" readonly>
                    <br><br><br><br>

                    <lable>E-mail Address</lable><br><br><br><br>
                    <input type="email" id="email" name="email" value="" readonly><br>
                    <br>
                    <br>
                    <lable>About Me</lable>
                    <br>
                    <input type="text" style="width:100%;height:100%"id="discription" readonly>
                    <br>
                    <lable>Vehicle Type</lable>
                    <br>
                    <input type="text" style="width:100%;height:100%"id="vehicleType" readonly>
                    <br>
                    <lable>Vehicle Model</lable>
                    <br>
                    <input type="text" style="width:100%;height:100%"id="vehicleModel" readonly>
                </form>
			</div> 
		</div>
        <?php  
        	if(isset($_GET['contactNo'])){
        		echo "<script>var contactNo=".$_GET['contactNo'].'</script>';
                session_start();
                if(isset($_SESSION['contactNo'])){
                    $_SESSION['contactNo']=$_GET['contactNo'];
                }
        	}
        ?>
        <script src="js/jquery-1.12.0.min.js"></script>
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

			function getProfile(contactNo){
                
                $.ajax({
                  type: "POST",
                  url: "http://localhost:8000/getdriverprofile",
                  crossDomain:true,
                  data: 
                    {
                        contactNo:contactNo
                    },
                  dataType: "json"
                }).done(function(data){
                  $.each( data, function( key, value ) {
                  		$('#firstName').val(value.firstName);
                  		$('#lastName').val(value.lastName);
                  		$('#email').val(value.email);
                  		$('#discription').val(value.discription);
                  		$('#vehicleType').val(value.vehicleType);
                  		$('#vehicleModel').val(value.vehicleModel);

            		});
                });
            }

            $(document).ready(function(){
                getProfile(contactNo);
            });
		</script>
	</body>
</html>
