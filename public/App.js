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
                    inp.removeClass("border-danger").addClass("border-primary").addClass("inp1").removeClass("inp0");
                    $("label[mess=" + n + "]").css("color", "blue");
               } else {
                    inp.addClass("border-danger").removeClass("border-primary").addClass("inp0").removeClass("inp1");
                    $("label[mess=" + n + "]").css("color", "red");
               }
               var vali = $("input[vali]:not([no-re])");
               var inp0 = $(".inp0");
               var vali1 = $("input.inp1[vali]:not([no-re])");
               console.log(vali.length+"---"+vali1.length);
               if (inp0.length == 0 && vali1.length == vali.length)
                    $("button[name='sm']").removeClass("disabled");
               else $("button[name='sm']").addClass("disabled");
          }
     );
}
var imagesPreview = function(input, placeToInsertImagePreview) {
     $(placeToInsertImagePreview).html("");
     if (input.files) {
         var filesAmount = input.files.length;

         for (i = 0; i < filesAmount; i++) {
             var reader = new FileReader();
             reader.onload = function(event) {
                 // $($.parseHTML('<img>')).attr('src', event.target.result).addClass("col p-2").appendTo(placeToInsertImagePreview);
                 var khung = $($.parseHTML('<div>')).addClass("p-1 col p-1").appendTo(placeToInsertImagePreview);
                 $($.parseHTML('<img>')).attr('src', event.target.result).css("width", "100%").addClass("border").appendTo(khung);
             }
             reader.readAsDataURL(input.files[i]);
         }
     }
 };