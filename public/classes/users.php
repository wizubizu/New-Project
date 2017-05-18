<?php
session_start();
include 'connect.php';
class flathub_users {
			private $db;
			public function __construct(){
				$this->db = new connection(); 
				$this->db = $this->db->connect();
			}
		
		public function book_viewing($fullname, $email, $phone, $company_name, $company_address, $date, $time) {
			if ( empty($fullname) || empty($email) || empty($phone) || empty($company_name) || empty($company_address) || empty($date) || empty($time)) {
				echo '<script type="text/javascript">';
									  echo 'setTimeout(function () { 
									  	swal("Oops!" , "All fields are required...","error");';
									  echo '}, 
									  1000);</script>';
			}else{
				$sql = $this->db->prepare("INSERT INTO viewings (`fullname`, `email`, `phone`, `company_name`, `company_address`, `date`, `time`) VALUES (?,?,?,?,?,?,?) ");
				 $sql->bindParam(1,$fullname);
				 $sql->bindParam(2,$email);
				 $sql->bindParam(3,$phone);
				 $sql->bindParam(4,$company_name);
				 $sql->bindParam(5,$company_address);
				 $sql->bindParam(6,$date);
				 $sql->bindParam(7,$time);
				 if ( $sql->execute()) {
				 		echo '<script type="text/javascript">';
									  echo 'setTimeout(function () { 
									  	swal("Thank You!" , "Your booking was successful, as we shall be expecting you on the specified date and time,","success");';
									  echo '}, 
									  1000);</script>';
				}	
			} 

		} 

		public function user_login($email, $password){
			try {
				if (!empty($email) AND !empty($password)) {
					$sql = $this->db->prepare("SELECT * FROM `users` WHERE `email` = ? AND `password` = ?");
					$sql->bindParam(1,$email);
					$sql->bindParam(2,$password);
					$sql->execute();

					$result = $sql->fetch(PDO::FETCH_ASSOC); 
					if ($sql->rowCount() > 0) {
							$_SESSION['user_id'] = $result['id'];
							$_SESSION['user_fullname'] = $result['fullname'];
							$session_id = $_SESSION['user_id'];
							$session_fullname = $_SESSION['user_fullname'];
							header("location:dashboard.php");
							return true;
							
						}else{
							echo "<script> alert('Login was not successfull or you dont ave an account yet') </script>";

					}//end of row count
					
					if ($password === $result['password']) {

						}else{
						echo "<script> alert('Wrong username or password!') </script>";
					
						return false;
					
					}// end of pass enter wit db pass


				}	else {
						echo "<script> alert('Field cant be empty') </script>";
				}
			} catch (PDOException $e) {
			
				echo $e->getMessage();

				
			}

		}//end of user_login function

		public function user_logout(){
			session_destroy();
			header("location:login.php");
		} //end of function

		
	}//end of class
?>
