$('#signInbtn').click(function() {
    $.ajax({
      type: 'post',
      url: '?controller=SignIn&action=show',
      data: '',
      success: function (data) {
      }
    });
});