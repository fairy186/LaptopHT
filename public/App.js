function check(ele, domain, control) {
     var inp = $(ele);
     var val = $(ele).val();
     var n = $(ele).attr("name");
     $.post(
          "/"+domain+"/Ajax/Check/", {
               val: val,
               md: control,
               fn: n
          },
          function(data) {
               var d = JSON.parse(data);
               $("label[mess=" + n + "]").html(d[0]);
               if (d.length == 1) {
                    inp.removeClass("border-danger");
                    inp.addClass("border-primary")
                    $("label[mess=" + n + "]").css("color", "blue");
                    $("label[mess=" + n + "]").addClass("blue");
                    $("label[mess=" + n + "]").removeClass("red");
               } else {
                    inp.addClass("border-danger");
                    inp.removeClass("border-primary")
                    $("label[mess=" + n + "]").css("color", "red");
                    $("label[mess=" + n + "]").addClass("red");
                    $("label[mess=" + n + "]").removeClass("blue");
               }
               var mess = $("label[mess]");
               var messblue = $(".blue");
               if (mess.length == messblue.length)
                    $("button[name='sm']").removeClass("disabled");
               else $("button[name='sm']").addClass("disabled");
          }
     );
}