///**
// * 
// */
//function resetForm() {
//	$("#userId").val('') ;
//	$("#userName").val('');
//}
//
//$(document).keyup(function(e) {
//	if (e.keyCode == 27) {
//		$("#userId").val('') ;
//		$("#userName").val('');
//	}
//})
//
//
//function addUser() {
//	  $.ajax({
//          type: 'post',
//          url: 'index.php?controller=User&action=addUser',
//          data: $('form').serialize(),
//          success: function () { 
//            alert ('Add successful!!!');
//          }
//        });
//
//
//}