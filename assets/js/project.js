$(document).ready(function () {
    
     $( function() {
    $( "#datepicker" ).datepicker();
  });
    
    $('button').click(function () {
        $('#item-lists').append("<li>" + $("input[name=task]").val() + "</li>");
        $("input[name=task]").val("");
    });
    
          $(document).on('dblclick','li', function(){
        $(this).toggleClass('strike').fadeOut('slow');    
      });
    
    
    $('table').find('td').click(function(){
        $('#item-lists').append($(this).text());
        // $('#item-lists').append("<li>" + $("input[name=task]").val() + "</li>");
    });
   
//      $("td").click(function(){
//         alert("This cell was clicked.")
         
//     });
    
//     $('table').find('td').click(function(){
//    alert($(this).text());
// });
    
    
    $("body").on('click', '#item-lists', function () {   
    });
        
});
