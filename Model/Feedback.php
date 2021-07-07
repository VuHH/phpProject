<?php
class Feedback {
    public $id;
    public $date;
    public $content;
    public $userid;
    public $ans;
    public $ansdate;
    public $IsView;
    
            
    function __construct($id, $date, $content, $userid, $ans, $ansdate, $IsView) {
        $this->id = $id;
        $this->date = $date;
        $this->content = $content;
        $this->userid = $userid;
        $this->ans = $ans;
        $this->ansdate = $ansdate;
        $this->IsView = $IsView;
    }
    
    public static function showlist($userID){
        include 'Model/connectDB.php';
        $conn = connectDB();
        $temp;
        $lstfb=[];
        $sql = "SELECT * FROM feedback WHERE CustomerID = '".$userID."' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $item = array(
                        "id"=>$row["FeedbackID"],
                        "feedbackDate" => $row["FeedbackDate"],
                        "feedbackContent"=>$row["FeedbackContent"],
                        "answerFeedback"=>$row["AnswerFeedback"],
                        "answerDate"=>$row["AnswerDate"],
                        "isView"=>$row["IsView"]
                    );
                    array_push($lstfb, $item);
                }
            } else {
                echo '0 results';
                
            }
            $conn->close();
            return $lstfb;
        
    }
    
    public static function add($content, $id, $date, $userid) {
    include 'Model/connectDB.php';
    $conn = connectDB();
        
         $sql = "INSERT INTO feedback (FeedbackID, FeedbackDate, FeedbackContent, "
            . "CustomerID, IsView) VALUES ('".$id."'"
            . ", '".$date."', '".$content."', '".$userid."' , 1)";
         //echo $sql;
        if ($conn->query($sql) === TRUE) {
            echo '<h5 class = "text-center col-sm-12" style="color: #9BCE5B;" >gửi feedback thành công</h5>';
            return 0;
	} else {
	    return 2;
	}
        
   
    $conn->close();
    

}

}
        
        
        
?>

