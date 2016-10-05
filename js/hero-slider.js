

jQuery(document).ready(function($){

  $('.hero-slider ul a').click(function() {

   //reset all the items

    $('.customBlock ul a').removeClass('active');

    //set current item as active

    $(this).addClass('active'); 

     //scroll it to the right position

    $('.mask').scrollTo($(this).attr('rel'), 300);

     //disable click event

      return false;   

  });

});



