$(document).ready(function() {
     $("input[type='text']").keyup(function() {
          var val = $(this).val();
          var n = $(this).attr("name");
          $.post(
               "../Ajax/Check/" + n + "", {
                    val: val,
               },
               function(data) {
                    var d = JSON.parse(data);
                    $("label[mess="+n+"]").html(d[1]);
                    if (d[0] == 1) {
                         $("label[mess="+n+"]").css("color", "blue");
                         $("label[mess="+n+"]").addClass("blue");
                         $("label[mess="+n+"]").removeClass("red");
                    } else {
                         $("label[mess="+n+"]").css("color", "red");
                         $("label[mess="+n+"]").addClass("red");
                         $("label[mess="+n+"]").removeClass("blue");
                    }
                    var mess = $("label[mess]");
                    var messblue = $(".blue");
                    if (mess.length == messblue.length)
                         $("button[name='sm']").removeClass("disabled");
                    else $("button[name='sm']").addClass("disabled");
               }
          );

     });
});