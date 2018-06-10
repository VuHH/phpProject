function resetForm() {
	$("#usernameRegister").val('') ;
	$("#passRegister").val('');
        $("#rePassRegister").val('');
        $("#emailRegister").val('');
        $("#fullnameRegister").val('');
        $("#error").html("");
}    
function validateForm() {   
    var username = $("#usernameRegister").val();
    var pwd = $("#passRegister").val();
    var repwd = $("#rePassRegister").val();
    var email = $("#emailRegister").val();
    var fullname = $("#fullnameRegister").val();
    $("#error").html("");
    
    if (validateUsername(username)) {
        if (validatePassword(pwd)) {
            if (validateRePass(repwd,pwd)) {
                if(validateFullName(fullname)) {
                    if (validateEmail(email)) {
                        $.ajax({
                            type: 'post',
                            url: '?controller=SignUp&action=add',
                            data: $('#registerForm').serialize(),
                            success: function (data) {
                                let myArr = data.split("-***myJSONRegister***-");
                                let myJson = JSON.parse(myArr[1]);   
                                if (myJson == 1) {
                                    showInfoMessage("Tài khoản đã tồn tại.");
                                    resetForm();
                                } else if (myJson == 2) {
                                    showInfoMessage("Đăng ký không thành công");
                                    resetForm();
                                } else {
                                    $("#registerModal").modal('toggle');
                                    showInfoMessage("Đăng ký thành công");
                  
                                }
                            }
                        });     
                    }
                }
            }
        }
    }
}

function validateUsername(username) {
    
    var isValid = true;
    // validate username
    if (username != null && username.length > 0) {
        if (username.length < 6 || username.length > 20) {
            $("#error").html("<b style='color:red'>Tên đang nhập phải từ 6- 20 ký tự</b>");
            isValid = false;
        } else {
            if (/^[a-zA-Z0-9- ]*$/.test(username) == false) {
                $("#error").html("<b style='color:red'>Tên đang nhập không được có ký tự đặt biệt</b>");
                isValid = false;
            }
        }

    } else {
        $("#error").html("<b style='color:red'>Vui lòng điền vào tên đăng nhập</b>");
        isValid = false;
    }
    
    return isValid;
}
function validatePassword(pwd) {
    
    var isValid = true;
    // validate password
    if (pwd != null && pwd.length > 0) {
        if (pwd.length < 6 || pwd.length > 20) {
            $("#error").html("<b style='color:red'>Mật khẩu phải từ 6- 20 ký tự</b>");
            isValid = false;
        } 
    } else {
        $("#error").html("<b style='color:red'>Vui lòng điền vào mật khẩu</b>");
        isValid = false;
    }
    return isValid;
}
function validateRePass(repwd,pwd) {
    var isValid = true;
    // validate repassword
    if (repwd.localeCompare(pwd) != 0) {
        $("#error").html("<b style='color:red'>Vui lòng điền trùng với mật khẩu</b>");
        isValid = false;
    }
    return isValid;
}
function validateFullName(fullname) {
    var isValid = true;
    // validate fullname
    if (fullname != null && fullname.length > 0) {
        if (/^[a-zA-Z- ]*$/.test(fullname) == false) {
            $("#error").html("<b style='color:red'>Tên không được có ký tự đặt biệt và số</b>");
            isValid = false;
        }
    } else {
        $("#error").html("<b style='color:red'>Vui lòng điền vào họ tên</b>");
        isValid = false;
    }
    return isValid;
}

function validateEmail(email) {
    var isValid = true;
    // validate email
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email != null && email.length > 0) {
            if (re.test(email) == false) {
                $("#error").html("<b style='color:red'>Email không đúngt</b>");
                isValid = false;
            }
    }
    else {
        $("#error").html("<b style='color:red'>Vui lòng điền vào email</b>");
        isValid = false;
    }
    return isValid;
}
