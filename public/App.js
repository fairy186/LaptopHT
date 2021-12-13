$(document).ready(function() {
     $("input[name='ma']").keyup(function() {
          var field = $(this).val();
          $.post("../Ajax/CheckID", {
               id: field
          }, function(data) {
               $("#IDmessage").html(data);
          });
     });
     $("input[name='ten']").keyup(function() {
          var field = $(this).val();
          $.post("../Ajax/CheckName", {
               name: field
          }, function(data) {
               $("#NameMessage").html(data);
          });
     });
});