function check(ele, domain, control) {
     var inp = $(ele);
     var val = $(ele).val();
     var n = $(ele).attr("name");
     $.post(
          "/" + domain + "/Ajax/Check/",
          {
               val: val,
               md: control,
               fn: n,
          },
          function (data) {
               var d = JSON.parse(data);
               $("label[mess=" + n + "]").html(d[0]);
               if (d.length == 1) {
                    console.log(inp.attr("disabled"));
                    inp.removeClass("border-danger").addClass("border-primary");
                    $("label[mess=" + n + "]").css("color", "blue").addClass("blue").removeClass("red");
               } else {
                    if (!inp.attr("disabled")) {
                         inp.addClass("border-danger").removeClass("border-primary");
                    }
                    console.log(inp.attr("disabled"));
                    $("label[mess=" + n + "]").css("color", "red").addClass("red").removeClass("blue");
               }
               var mess = $("label[mess]");
               var messblue = $(".blue");
               if (mess.length == messblue.length)
                    $("button[name='sm']").removeClass("disabled");
               else $("button[name='sm']").addClass("disabled");
          }
     );
}
