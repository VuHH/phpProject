function logout() {
    $.ajax({
      type: 'post',
      url: '?controller=SignIn&action=logoutAction',
      data: '',
      success: function (data) {
        let myArr = data.split("-***myJSONLogout***-");
        let myJson = JSON.parse(myArr[1]);
        var output="";
        if (myJson == 1) {
            output += '<div class="row">' +
        '<div class="col-sm-6">'
                '<button class="btn btn-primary" style="width: 100%; margin: 0"' + 
                        'data-toggle="modal" data-target="#registerModal">Đăng ký</button>' +
	'</div>' +
        '<div class="col-sm-6">' +
            '<a href="?controller=SignIn&action=show">' +
               ' <button class="btn btn-success" id="signInbtn" style="width: 100%; margin: 0"' +
                        'onclick="SignIn()">Đăng nhập</button>' +
            '</a>' +
        '</div>' +
        '</div>';
        }
        
        $('#notLogin').hide();
        $('#loginMenu').html(output);
        window.location.href = "index.php?controller=HomePage&action=home";
      }
    });
}





