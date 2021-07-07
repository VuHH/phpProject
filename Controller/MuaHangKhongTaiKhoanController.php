<?php

class MuaHangKhongTaiKhoanController {
	public function show() {
            unset($_SESSION["userName"]); //+
            unset($_SESSION["fullName"]);//+
            unset($_SESSION["userEmail"]);//+
            unset($_SESSION["userAddress"]);//+
            unset($_SESSION["userPhone"]);
            require_once 'View/pages/GioHang/muahangkhongtaikhoan.php';
	}
    }
?>