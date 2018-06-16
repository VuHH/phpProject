
<?php
        if (isset($_SESSION['userID'])){
            $userID = $_SESSION['userID'];
            echo '<form id="feedbackForm">'
            . '<input type="hidden" id="userIdFeedback" '
                    . 'name="userIdFeedback" value="'.$userID.'"></form>';
        }
?>
<div class="container">
                <div class="row col-sm-6 col-sm-offset-2 custyle">
                    <table class="table table-striped custab">
                        
                        
                        <thead>
                        <h2 class="caption" style="color: #9BCE5B;"> Danh sách phản hồi đã gửi </h2>
                            <tr>
                                <th>Ngày gửi</th>
                                <th class="text-center">Nội dung feedback</th>
                                <th class="text-center">Nội dung trả lời</th>
                            </tr>
                        </thead>
                        <tbody id="feedbackList"></tbody>
                            
                    </table>
                    <a href="?controller=Feedback&action=showadd" class="text-center btn btn-success pull-right">Thêm mới</a>
                </div>
            </div>
    

