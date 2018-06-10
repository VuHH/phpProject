$('#btnSubmitComment').click(function() {
    $.ajax({
      type: 'post',
      url: '?controller=Comment&action=addComment',
      data: $('#formReplyComment').serialize(),
      success: function (data) {
          $('#txtComment').val("");
      }
    });
});