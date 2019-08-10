
//Menu Switch

 
jQuery(document).ready(function($){
   $(function(){
<<<<<<< HEAD
          
          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');
              $('div.content .prod-cnt').each(function(){
=======
        
        /* filter */
        $('.menuSwitch ul li').click(function(){
            var CategoryID = $(this).attr('category');
            $('.menuSwitch ul li').removeClass('cat-active');
            $(this).addClass('cat-active');
            $('div.content .prod-cnt').each(function(){
>>>>>>> 58d42921a0881a5a17e245a161ffd18b2c6c94c8
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                }
            });
              $('.'+CategoryID).fadeIn();
        });
    });
});
