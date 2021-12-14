function validate(fieldname, idmessage) {
  $("input[name=" + fieldname + "]").keyup(function () {
    var val = $(this).val();
    var name = $(this).attr("placeholder");
    $.post(
      "../Ajax/Check/" + fieldname + "",
      {
        val: val,
      },
      function (data) {
           var d =JSON.parse(data);
        
        if(d[0]==1){
          $("#" + idmessage).html("<i class='bi bi-check2-circle'></i> "+name+" "+d[1]);
          $("#" + idmessage).css("color", "blue");
        }
          else 
          {    
               $("#" + idmessage).html("<i class='bi bi-x-circle'></i> "+name+" "+d[1]);
               $("#" + idmessage).css("color", "red");
          }
      }
    );
  });
}

$(document).ready(function () {
  validate("ma", "IDmessage");
  validate("ten", "NameMessage");
});
