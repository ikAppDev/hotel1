<?php include'init.php';?>
<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=bdd', 'root', '');

if(isset($_POST['send'])) {
   $full_name = htmlspecialchars($_POST['full_name']);
   $email = htmlspecialchars($_POST['email']);
   $msg = htmlspecialchars($_POST['msg']);
if(!empty($_POST['full_name']) AND !empty($_POST['email']) AND !empty($_POST['msg'])   ) {

                     $insertmbr = $bdd->prepare("INSERT INTO msg(full_name,email,msg) VALUES(?,?,?)");
                     $insertmbr->execute(array($full_name,$email,$msg));
                     header('Location: index.php');




   }
}
?>
<div class="top ">
</div>
<div class="overly">
	<div class="">
		<nav class="nav row">
			<div class="logo ">LUX HOTEL</div>
			<nav class="col-10 navbar navbar-expand-lg navbar-dark bg-dark">
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="navbar-nav ml-auto">
			      		<li class="nav-item active">
			        		<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="index.php#about">About Us</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="contact.php">Contact</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="reservation.php#Rooms">Rooms</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="#conferences.php">conferences Room</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link btn bttn" href="reservation.php">
			        			Resevation
			        		</a>
			      		</li>
			    	</ul>
			  	</div>
			</nav>
		</nav>
		<div class="home_content text-center">
			<div class="row">
				<form action="" method="post" class="col-9">
					<div class="form-row">
						<div class="form-group col-6">
							<label> Full name</label>
							<input name="full_name" type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="full name" required="required">
						</div>
						<div class="form-group col-6">
							<label> Email</label>
							<input name="email" type="email" class="datepicker booking_input booking_input_a booking_in" placeholder="exemple@exempl.com" required="required">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-12">
							<label for="">Your Message</label>
							<textarea name="msg" style="min-height: 200px;" class="datepicker booking_input booking_input_a booking_in">

							</textarea>
						</div>
					</div>
					<input class="booking_button trans_200" type="submit" name="send" value="Send Now" >
				</form>
				<div class="col-3">
			        <div class="p-3 mb-3 contact_hotel">
			         	<h3 class="h5 text-black mb-3">Contact Info :</h3>
			          	<p class="mb-0 font-weight-bold">Address</p>
			          	<p class="mb-4 m">42 Hamadi krouma Skikda, ALGERIA</p>
			          	<p class="mb-0 font-weight-bold">Phone</p>
			          	<p class="mb-4 m">+3215640698</p>
			          	<p class="mb-0 font-weight-bold">Email Adress</p>
			          	<p class="mb-4 m">lux-hotel@gmail.com</p>
			        </div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php
	include $tpl . 'footer.php';?>
