$('.toggle_nav_button').click(function() {
    $.ajax({
      type: 'post',
      url: 'index.php?controller=Menu&action=show',
      data: '',
      success: function (data) {
        let myArr = data.split("-***myJSONFastFood***-");
        let myJson = JSON.parse(myArr[1]);
        var output = "";
        for (var i = 0; i < myJson.length; i++) {
            output +=
                "<form action='?controller=FoodCategory&action=show' method='post' class='menu-children-form' >" +
                    "<div class='item-menu-children'>" +
                        "<p class='text-center'>" + myJson[i].name + "</p>" +
                        "<img src=" + myJson[i].image + " alt='Menu'>" +
                    "</div>" +
                    "<input type='hidden' name='typeID' value='" + myJson[i].id + "'>" +
                    "<button class='menu-children-form-button' type='submit'></button>" +
                "</form>";
        }
        $('.menu-children').html(output);
        $('.menu-children').toggle();
      }
    });
});