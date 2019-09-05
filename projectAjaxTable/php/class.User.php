<?php 
	require_once("conection.php");

	class User{
		private $login;
		private $userpassword;
		private $conn;

		public function __construct(){

		}

		function connection(){
			try {
			  $this->conn = new PDO('mysql:host=localhost;dbname=project', 'root', '');
			  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			} catch(PDOException $e) {
			    echo 'ERROR: ' . $e->getMessage();
			}

			return $this->conn;
		}

		function findAll(){
			$stmt = $this->conn->prepare("SELECT* FROM usertable");
			
			$stmt->execute();

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$contentTable  = "<tr><td>".$row['login']."</td>";
				$contentTable .=     '<td>'.$row['userpassword']. '</td></tr>';
				
				echo $contentTable;
			}

		}
	}