<?php 
class connection {
	public function connect(){
		return new PDO("mysql:host=localhost; dbname=flathub","root", "");
	}
}

 ?>