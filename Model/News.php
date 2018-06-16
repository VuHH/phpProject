<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Food
 *
 * @author BoRyan
 */
class News {
    public $id;
    public $title;
    public $des;
    public $image;
    public $date;
    
            
    function __construct($id, $title, $des, $image, $date) {
        $this->id = $id;
        $this->title = $title;
        $this->des = $des;
        $this->image = $image;
        $this->date = $date;
        
    }
    
    public static function showNews() {
        
            include 'Model/connectDB.php';
            $conn = connectDB();
            $lst = [];
            $temp;
            $sql = "SELECT * FROM news";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $temp = new News(
                                $row["NewsID"], $row["TitleNews"], $row["Description"], 
                                $row["DirImage"], $row["DatePost"]);
                    
                    array_push($lst, $temp);
                }
            } else {
                //echo '0 results';
                
            }
            $conn->close();
            return $lst;
	}
        
    public static function showDetail($NewsID,$conn) {
            $lstNews = NULL;
            $sql = "SELECT * FROM news WHERE NewsID = '".$NewsID."' ";
            //echo $sql;
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                
                        $lstNews = new News(
                                $row["NewsID"], $row["TitleNews"], $row["Description"], 
                                    $row["DirImage"], $row["DatePost"]);
                    }
                
            } else {
                    //echo "0 results";
            }
//            $conn->close();
            return $lstNews;
    }

    public static function searchNews($search) {
        
        include 'Model/connectDB.php';
        $conn = connectDB();
        
        $lstNews = [];
        $sql = "SELECT * FROM news WHERE TitleNews like '%$search%'";
        //echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                            $item = new News(
                                    $row["NewsID"], $row["TitleNews"], $row["Description"], 
                                    $row["DirImage"], $row["DatePost"]);
                            array_push($lstNews, $item);
                    }
            } else {
                    //echo "0 results";
            }
            $conn->close();
            return $lstNews;
        
    }
        
    
}
?>
