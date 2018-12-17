$(document).ready(function () {

  //    $( function() {
  //   $( "#datepicker" ).datepicker();
  // });

    $('button').click(function () {
        $('#item-lists').append("<li>" + $("input[name=task]").val() + "</li>");
        $("input[name=task]").val("");
    });

     $('button').click(function () {
        $('#list2').append("<li>" + $("input[name=task2]").val() + "</li>");
        $("input[name=task2]").val("");
    });

     $('button').click(function () {
        $('#list3').append("<li>" + $("input[name=task3]").val() + "</li>");
        $("input[name=task3]").val("");
    });

    $('button').click(function () {
        $('#list4').append("<li>" + $("input[name=task4]").val() + "</li>");
        $("input[name=task4]").val("");
    });

     $('button').click(function () {
        $('#list5').append("<li>" + $("input[name=task5]").val() + "</li>");
        $("input[name=task5]").val("");
    });

    $('button').click(function () {
        $('#list6').append("<li>" + $("input[name=task6]").val() + "</li>");
        $("input[name=task6]").val("");
    });

    $('button').click(function () {
        $('#list7').append("<li>" + $("input[name=task7]").val() + "</li>");
        $("input[name=task7]").val("");
    });

          $(document).on('dblclick','li', function(){
        $(this).toggleClass('strike').fadeOut('slow');
      });

  

    $("body").on('click', '#item-lists', function () {
    });

});
