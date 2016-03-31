/*$(document).ready(function() {
  /**
   * process the form
   */
  $('phone-log').submit(function() {

    var error = 0;
    var pdata              = $('inputTextarea1').val();
    var numberOfLineBreaks = (pdata.match(/\n/g)||[]).length;
    var pdata1             = pdata.replace(/\n/g, '__');
    var arr                = pdata1.split('__');
    
    // console.log('*******test begins');
    console.log(arr);
    
    *
     * send the data through AJAX
     
    $.ajax({
      type     : 'POST',
      url      : 'result.php',
      data     : arr,
      dataType : 'json',
      encode   : true
    })
    .done(function(data) {
      console.log(data);
    })
    // .fail(function() {
    //   console.log("error");
    // })
    // .always(function() {
    //   console.log("complete");
    // });
    
    event.preventDefault();
      
  });
});
*/