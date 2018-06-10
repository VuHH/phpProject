<?php
        if (isset($_SESSION['userID'])){
            $userID = $_SESSION['userID'];
            echo '<form id="historyForm">'
            . '<input type="hidden" id="userIdHistory" '
                    . 'name="userIdHistory" value="'.$userID.'"></form>';
        }
?>
<h2 style="color: #9BCE5B;">Lịch sử giao dịch</h2>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Ngày giao dịch</th>
        <th>Thông tin đơn hàng</th>
        <th>Đơn giá</th>
      </tr>
    </thead>
    <tbody id="showHistory">
    </tbody>
  </table>