<?php

	$conn = mysqli_connect('localhost','id16521797_userdata','Sparksintern#2021','id16521797_user');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
	?>