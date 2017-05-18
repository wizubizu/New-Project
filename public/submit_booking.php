<?php 
		include 'classes/users.php';
		// if (isset($_POST['book_viewing'])) {
			
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$company_name = $_POST['company_name'];
			$company_address = $_POST['company_address'];
			$date = $_POST['date'];
			$time = $_POST['time'];

			$execute = new flathub_users();

			$execute->book_viewing($fullname, $email, $phone, $company_name, $company_address, $date, $time);

		// }
 ?>