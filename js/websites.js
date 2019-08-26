
//Menu Switch

 
jQuery(document).ready(function($){
   $(function(){
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3dd30d6efcc65b57e1614a1a3d67bd042b75169
          
          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');
              $('div.content .prod-cnt').each(function(){
<<<<<<< HEAD
=======
=======
        
        /* filter */
        $('.menuSwitch ul li').click(function(){
            var CategoryID = $(this).attr('category');
            $('.menuSwitch ul li').removeClass('cat-active');
            $(this).addClass('cat-active');
            $('div.content .prod-cnt').each(function(){
>>>>>>> 58d42921a0881a5a17e245a161ffd18b2c6c94c8
>>>>>>> a3dd30d6efcc65b57e1614a1a3d67bd042b75169
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                }
            });
              $('.'+CategoryID).fadeIn();
        });
    });
});
