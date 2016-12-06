

jQuery(document).ready(function($){

  $('.hero-slider ul a').click(function() {

   //reset all the items

    $('.customBlock ul a').removeClass('active');

    //set current item as active

    $(this).addClass('active'); 

     //scroll it to the right position

<<<<<<< HEAD
    $('.hero-slider .mask').scrollTo($(this).attr('rel'), 300);
=======
    $('.mask').scrollTo($(this).attr('rel'), 300);
>>>>>>> origin/master

     //disable click event

      return false;   

  });

});



