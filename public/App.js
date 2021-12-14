
function validate(fieldname, idmessage) {
  $("input[name=" + fieldname + "]").keyup(function () {
    var val = $(this).val();
    var name = $(this).attr("placeholder");
    var mess = $(".mess");
    var messblue = $(".blue");
    $.post(
      "../Ajax/Check/" + fieldname + "",
      {
        val: val,
      },
      function (data) {
        var d = JSON.parse(data);

        if (d[0] == 1) {
          $("#" + idmessage).html(
            "<i class='bi bi-check2-circle'></i> " + name + " " + d[1]
          );
          $("#" + idmessage).css("color", "blue");
          $("#" + idmessage).addClass("blue");
          $("#" + idmessage).removeClass("red");
        } else {
          $("#" + idmessage).html(
            "<i class='bi bi-x-circle'></i> " + name + " " + d[1]
          );
          $("#" + idmessage).css("color", "red");
          $("#" + idmessage).addClass("red");
          $("#" + idmessage).removeClass("blue");
        }
      }
    );
   
    if (mess.length == messblue.length)
      $("button[name='sm']").removeClass("disabled");
    else
      $("button[name='sm']").addClass("disabled");
      
  });
}

$(document).ready(function () {
  validate("ma", "IDmessage");
  validate("ten", "NameMessage");
});
