$('#btnSubmitComment').click(function() {
    $.ajax({
      type: 'post',
      url: 'index.php?controller=Comment&action=addComment',
      data: $('#formReplyComment').serialize(),
      success: function (data) {
          $('#txtComment').val("");
      }
    });
});