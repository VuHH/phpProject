<?php
class User {
	public $id;
	public $name;
	
	public function __construct($id, $name) {
		$this->id = $id;
		$this->name = $name;
	}
	
	public static function showAll() {
		include 'Model/connectDB.php';
		$conn = connectDB();
		
		$lstUsers= [];
		
		$sql = "SELECT id, name FROM test";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$lstUsers[] = new User($row["id"], $row["name"]);
			}
		} else {
			echo "0 results";
		}
		$conn->close();
		
		return $lstUsers;
	}
	public static function addUser($id, $name) {
	    include 'Model/connectDB.php';
	    $conn = connectDB();
	    
	    $sql = "INSERT INTO test (id, name) VALUES ('". $id ."', '". $name ."')";
	    
	    if ($conn->query($sql) === TRUE) {
	        return true;
	    } else {
	        return false;
	    }
	    
	    $conn->close();
	    
	}
}

?>