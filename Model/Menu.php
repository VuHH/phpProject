<?php
class Menu {
        private $id;
	private $name;
        private $image;
        private $describle;
        
        function __construct($id, $name, $image, $describle) {
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
            $this->describle = $describle;
        }

        public static function show() {
		include 'Model/connectDB.php';
		$conn = connectDB();
		
		$lstMenu = [];
		
		$sql = "SELECT * FROM type";
		$result = $conn->query($sql);
		$item = [];
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
                                $item = array(
                                    "id"=>$row["TypeID"],
                                    "name"=> utf8_encode($row["TypeName"]),
                                    "image"=>$row["DirImage"],
                                    "des"=>utf8_encode($row["TypeDescribe"]));
                                array_push($lstMenu, $item);
			}
		} else {
			echo "0 results";
		}
		$conn->close();
		//echo $lstMenu;
		return $lstMenu;
	}
}

?>
