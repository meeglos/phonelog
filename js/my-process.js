$(document).ready(function()
{
 $(document).on('submit', '#phone-log', function()
 {
  
  //var fn = $("#fname").val();
  //var ln = $("#lname").val();
 
  //var data = 'fname='+fn+'&lname='+ln;

  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  : 'result.php',
  data : data,
  success :  function(data)
       {
      $("#phone-log").fadeOut(500).hide(function()
      {
       $(".result").fadeIn(500).show(function()
       {
        $(".result").html(data);
       });
      });
      
       }
  });
  return false;
 });
 
});
