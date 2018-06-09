<?php
class Comment {
    public $CommentID;
    public $CommentDate;
    public $CommentContent;
    public $CustomerID;
    public $FoodID;
    public $AnwserComment;
    public $AnwserDate;
    public $IsView;
    
    function __construct($CommentID, $CommentDate, $CommentContent, $CustomerID, $FoodID, $AnwserComment, $AnwserDate, $IsView) {
        $this->CommentID = $CommentID;
        $this->CommentDate = $CommentDate;
        $this->CommentContent = $CommentContent;
        $this->CustomerID = $CustomerID;
        $this->FoodID = $FoodID;
        $this->AnwserComment = $AnwserComment;
        $this->AnwserDate = $AnwserDate;
        $this->IsView = $IsView;
    }

    public static function addComment($customerID, $foodID, $txtComment) {
            include 'Model/connectDB.php';
            $conn = connectDB();
            //IsView = 1 => true, 0 => false;
            $sql = "INSERT INTO comment (CommentID,CommentDate,CommentContent,CustomerID,FoodID,AnwserComment,AnwserDate,IsView) "
                    . "VALUES ('".uniqid()."',".date("Y/m/d").",'".$txtComment."','".$customerID."','".$foodID."',null,".date("Y/m/d").",1)";
//            echo $sql;
            $result = $conn->query($sql);
            if ($conn->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
//            if ($result->num_rows > 0) {
//                    while($row = $result->fetch_assoc()) {
//                            $item = new FoodCategory(
//                                    $row["FoodID"], $row["FoodName"], $row["FoodDescribe"], 
//                                    $row["DirImage"], $row["Price"], $row["TypeID"]);
//                            array_push($lstFood, $item);
//                    }
//            } else {
//                    echo "0 results";
//            }
            
           
//            return $result;
            $conn->close();
	}
        
        public function getComment($foodID) {
            // Lay comment theo foodID
            $sql2 = 'select c.CommentContent, f.FoodID, f.FoodName, c.AnwserComment 
                    from food f, comment c where f.FoodID = c.FoodID and c.FoodId  = foodID';
                    
                    
            
        }
}

?>