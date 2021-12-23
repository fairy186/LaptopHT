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
                    inp.removeClass("border-danger").addClass("border-primary");
                    $("label[mess=" + n + "]").css("color", "blue").addClass("inp1").removeClass("inp0");
               } else {
                    if (!inp.attr("disabled")) {
                         inp.addClass("border-danger").removeClass("border-primary");
                    }
                    $("label[mess=" + n + "]").css("color", "red").addClass("inp0").removeClass("inp1");
               }
               var vali = $("input[vali]:not([no-re])");
               var mess0 = $(".inp0");
               var mess1 = $(".inp1");
               if (mess0.length==0 && mess1.length==vali.length)
                    $("button[name='sm']").removeClass("disabled");
               else $("button[name='sm']").addClass("disabled");
          }
     );
}
